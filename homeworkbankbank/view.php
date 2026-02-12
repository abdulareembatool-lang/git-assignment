<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نظام تحويل الأموال</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            direction: rtl;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #000000;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }
        select, input[type="number"] {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        input[type="submit"] {
            background: #2e4851ff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #2e4851ff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        table th {
            background: #2e4851ff;
            color: #fff;
        }
        .message {
            text-align: center;
            padding: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>نظام تحويل الأموال</h2>

    <?php if($message): ?>
        <div class="message" style="color: <?= $message_color ?>;"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>

    <form method="post">
        <label>من الحساب:</label>
        <select name="source_account" required>
            <option value="">اختر الحساب المصدر</option>
            <?php foreach ($accounts as $acc): ?>
                <option value="<?= $acc['id'] ?>"><?= htmlspecialchars($acc['name']) ?></option>
            <?php endforeach; ?>
        </select>

        <label>إلى الحساب:</label>
        <select name="target_account" required>
            <option value="">اختر الحساب المستهدف</option>
            <?php foreach ($accounts as $acc): ?>
                <option value="<?= $acc['id'] ?>"><?= htmlspecialchars($acc['name']) ?></option>
            <?php endforeach; ?>
        </select>

        <label>المبلغ:</label>
        <input type="number" name="amount" step="0.01" min="1" required>

        <input type="submit" name="transfer" value="تحويل الأموال">
    </form>

    <h2>الحسابات</h2>
    <table>
        <tr>
            <th>اسم الحساب</th>
            <th>الرصيد</th>
        </tr>
        <?php foreach($accounts as $acc): ?>
        <tr>
            <td><?= htmlspecialchars($acc['name']) ?></td>
            <td><?= htmlspecialchars($acc['balance']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>سجل التحويلات</h2>
    <table>
        <tr>
            <th>من</th>
            <th>إلى</th>
            <th>المبلغ</th>
            <th>التاريخ</th>
        </tr>
        <?php foreach($transactions as $t): ?>
        <tr>
            <td><?= htmlspecialchars($t['source_name']) ?></td>
            <td><?= htmlspecialchars($t['target_name']) ?></td>
            <td><?= htmlspecialchars($t['amount']) ?></td>
            <td><?= htmlspecialchars($t['transaction_date']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
