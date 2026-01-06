<?php
// الاتصال بقاعدة البيانات
$host = "localhost";
$db = "banks"; // اسم قاعدة البيانات عندك
$user = "root";
$pass = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}

$message = "";
$message_color = "red";

// تنفيذ التحويل
if (isset($_POST['transfer'])) {
    $source_id = $_POST['source_account'] ?? '';
    $target_id = $_POST['target_account'] ?? '';
    $amount    = $_POST['amount'] ?? 0;

    if (!is_numeric($amount)) {
        $message = "المبلغ غير صالح!";
    } elseif ($amount <= 0) {
        $message = "لايمكن تحويل مبلغ صفر او سالب!";
    } elseif (empty($source_id)||empty($target_id)) {
        $message = "يجب اختيار الحساب المصدر والحساب المستهدف!";
     } elseif ($source_id==$target_id) {  
        $message = "لايمكن التحويل الى نفس الحساب"; 
    } else {
        // جلب رصيد الحساب المصدر
        $stmt = $pdo->prepare("SELECT balance FROM account WHERE id = ?");
        $stmt->execute([$source_id]);
        $source_balance = $stmt->fetchColumn();

        if ($source_balance === false) {
            $message = "الحساب المصدر غير موجود";
        } elseif ($source_balance < $amount) {
            $message = "الرصيد غير كافي";
        } else {
            $pdo->beginTransaction();
            try {
                // خصم المبلغ
                $stmt = $pdo->prepare("UPDATE account SET balance = balance - ? WHERE id = ?");
                $stmt->execute([$amount, $source_id]);

                // إضافة المبلغ
                $stmt = $pdo->prepare("UPDATE account SET balance = balance + ? WHERE id = ?");
                $stmt->execute([$amount, $target_id]);

                // تسجيل التحويل
                $stmt = $pdo->prepare("INSERT INTO `transaction` (source_account, target_account, amount) VALUES (?, ?, ?)");
                $stmt->execute([$source_id, $target_id, $amount]);

                $pdo->commit();
                $message = "تم التحويل بنجاح";
                $message_color = "green";

            } catch (Exception $e) {
                $pdo->rollBack();
                $message = "فشل التحويل: " . $e->getMessage();
            }
        }
    }
}

// جلب الحسابات
$accounts = $pdo->query("SELECT * FROM account")->fetchAll(PDO::FETCH_ASSOC);

// جلب سجل التحويلات
$transactions = $pdo->query("
    SELECT
        t.id,
        a1.name AS source_name,
        a2.name AS target_name,
        t.amount,
        t.transaction_date
    FROM `transaction` t
    JOIN account a1 ON t.source_account = a1.id
    JOIN account a2 ON t.target_account = a2.id
    ORDER BY t.transaction_date DESC
")->fetchAll(PDO::FETCH_ASSOC);

// استدعاء الواجهة
include "view.php";
?>
