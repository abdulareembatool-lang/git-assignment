<?php

function sayHello() {
    echo "مرحباً بك في عالم الدوال!<br>";
}

sayHello(); // استدعاء الدالة
sayHello(); // يمكنك استدعاؤها أكثر من مرة!

?>
<?php

function welcome() {
    echo "أهلاً بالطلاب!<br>";
}

welcome();
?>
<?php

function greet($name) {
    echo "مرحباً يا $name!<br>";
}

greet("أحمد");
greet("سارة");
greet("إبراهيم");

?>
<?php

	function sum() {
	    return 10 + 20;
	}
	
	$result = sum();
	
	echo "النتيجة = $result";

?>
<?php

function add($a, $b) {
    return $a + $b;
}

$result = add(5, 7);

echo "الناتج = $result";

?>
<?php

function userInfo($name, $age) {
    return "الاسم: $name — العمر: $age سنة<br>";
}

echo userInfo("أحمد", 22);
echo userInfo("سارة", 19);

?>
<?php

function test() {
    $x = 10; // متغير محلي
    echo $x;
}

test();   // 10
echo $x;  // ❌ خطأ — المتغير غير موجود خارج الدالة

?>
<?php

$x = 5;

function show() {
    global $x;
    echo $x; // يعمل
}

show();

?>
<?php

$x = 20;

function demo() {
    echo $GLOBALS['x'];
}

demo(); // 20

?>
<?php

function welcome($name = "ضيف") {
    echo "أهلاً يا $name <br>";
}

welcome();           // أهلاً يا ضيف
welcome("أحمد");     // أهلاً يا أحمد

?>
<?php

function sumAll(...$numbers) {
    $total = 0;

    foreach ($numbers as $n) {
        $total += $n;
    }

    return $total;
}

echo sumAll(1, 2, 3, 4, 5);

?>
<?php

$hello = function() {
    echo "Hello!";
};

$hello(); // استدعاء

?>
<?php

function process($callback) {
    echo "بدء المعالجة...<br>";
    $callback();
}

process(function() {
    echo "تم التنفيذ داخل الكول باك!";
});

?>
<?php
echo rand(1, 10);
?>
<?php
$names = ["Ali", "Sara"];
array_push($names, "Mona");
?>
   <?php
function multiply($a, $b) {
    return $a * $b;
}

$result = multiply(5, 4);

echo $result;
?>
<?php

$students = ["Ali", "Omar", "Zed", "Lena", "Areej"];

$result = array_filter($students, function($name) {
    return strlen($name) > 3;
});

print_r($result);

?>
<?php

class Student {
    
    public function sayHello() {
        echo "مرحبًا، أنا طالب!";
    }
}

$st = new Student();
$st->sayHello();

?>
<?php

class Calculator {

    public function add($a, $b) {
        return $a + $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }
}

$calc = new Calculator();

echo $calc->add(10, 5);
echo $calc->multiply(4, 3);

?>
<?php

class User {
    public $name;

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User();
$user->setName("أحمد");

echo $user->getName(); // أحمد

?>
<?php

function factorial($n) {
    if ($n == 1) return 1;

    return $n * factorial($n - 1);
}

echo factorial(5); // 120

?>
<?php
function printLevels($level) {
    echo "المستوى: $level<br>";

    if($level == 0) return;

    printLevels($level - 1);
}

printLevels(4);
?>
<?php

$message = "مرحبًا";

$greeter = function() use ($message) {
    echo $message;
};

$greeter();

?>
<?php
$numbers = [1, 2, 3, 4];

$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);

print_r($squared);
?>
<?php

function multiplier($n) {
    return function($x) use ($n) {
        return $x * $n;
    };
}

$double = multiplier(2);
echo $double(10); // 20

$triple = multiplier(3);
echo $triple(10); // 30

?>
<?php
Route::get('/hello', function () {
    return "Hello World";
});
?>
<?php
Route::get('/hello', function () {
    return "Hello World";
});


public function handle($request, Closure $next)
{
    // معالجة قبل الوصول للـ Route
    return $next($request); // هنا callback
}


collect([1,2,3])->map(function($n){
    return $n * 2;
});
?>
<?php

$message = "Hello";

$greet = function() use ($message) {
    echo $message;
};

$greet();
?>
<?php
$users = ["Ali", "Sara", "Reem"];

$result = array_filter($users, function($name) {
    return strlen($name) > 3;
});
?>
<?php
$sum = fn($a, $b) => $a + $b;

echo $sum(5, 7);
?>
<?php
$numbers = [1,2,3,4];

$squared = array_map(fn($n) => $n * $n, $numbers);
?>
<?php

function multiply($a) {
    return function($b) use ($a) {
        return function($c) use ($a, $b) {
            return $a * $b * $c;
        };
    };
}

echo multiply(2)(3)(4); // 24

?>
<?php
function minLength($min) {
    return function($text) use ($min) {
        return strlen($text) >= $min;
    };
}

$validateName = minLength(5);

echo $validateName("Ali");    // false  
echo $validateName("Ahmed");  // true
?>
<?php
function applyTo($value, $fn) {
    return $fn($value);
}

echo applyTo(5, fn($n) => $n * 10); // 50
?>
<?php
function double($n) {
    return $n * 2;
}

function increment($n) {
    return $n + 1;
}

function compose($f, $g) {
    return function($x) use ($f, $g) {
        return $f($g($x));
    };
}

$combined = compose('double', 'increment');

echo $combined(5); // (5 + 1) × 2 = 12
?>
<?php
function add($a, $b) {
    return $a + $b;
}
?>
<?php
function sum($x, $y)
?>
<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>
<?php

echo "نوع الطلب: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "عنوان الصفحة: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "IP المستخدم: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "اسم السكربت: " . $_SERVER['SCRIPT_NAME'] . "<br>";

?>
<?php

echo $_GET['name']; // Ahmed
echo $_GET['age'];  // 20

?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo "اسم المستخدم: " . $username;

?>
<?php

$name = $_REQUEST['name'] ?? null;

?>
<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

?>
<?php

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES['myfile']['name']);

if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetFile)) {
    echo "تم رفع الملف بنجاح!";
} else {
    echo "حدث خطأ أثناء الرفع.";
}

?>
<?php

if (isset($_COOKIE['username'])) {
    echo "مرحبًا يا " . $_COOKIE['username'];
} else {
    echo "لا يوجد اسم محفوظ.";
}

?>
<?php

session_start();

$_SESSION['user_id'] = 10;
$_SESSION['name'] = "Ahmed";

?>
<?php

session_start();

echo $_SESSION['name']; // Ahmed

?>
<?php

$x = 10;

function show() {
    echo $GLOBALS['x'];
}

show();

?>
<?php

function sayHello() {
    echo "مرحباً بك في عالم الدوال!<br>";
}

sayHello(); // استدعاء الدالة
sayHello(); // يمكنك استدعاؤها أكثر من مرة!

?>
<?php

function welcome() {
    echo "أهلاً بالطلاب!<br>";
}

welcome();

?>
<?php

function greet($name) {
    echo "مرحباً يا $name!<br>";
}

greet("أحمد");
greet("سارة");
greet("إبراهيم");

?>
<?php

function sum() {
    return 10 + 20;
}

$result = sum();

echo "النتيجة = $result";

?>
<?php

function add($a, $b) {
    return $a + $b;
}

$result = add(5, 7);

echo "الناتج = $result";

?>
<?php

function userInfo($name, $age) {
    return "الاسم: $name — العمر: $age سنة<br>";
}

echo userInfo("أحمد", 22);
echo userInfo("سارة", 19);

?>
<?php

$x = 5;

function show() {
    global $x;
    echo $x; // يعمل
}

show();

?>
<?php

$x = 20;

function demo() {
    echo $GLOBALS['x'];
}

demo(); // 20

?>
<?php

function welcome($name = "ضيف") {
    echo "أهلاً يا $name<br>";
}

welcome();         // أهلاً يا ضيف
welcome("أحمد");   // أهلاً يا أحمد

?>
<?php

function sum($a, $b, $c) {
    return $a + $b + $c;
}

echo sum(1, 2, 3);

?>
<?php

function sumAll(...$numbers) {
    $total = 0;

    foreach ($numbers as $n) {
        $total += $n;
    }

    return $total;
}

echo sumAll(1, 2, 3, 4, 5); // 15

?>
<?php

$hello = function() {
    echo "Hello!";
};

$hello(); // استدعاء

?>
<?php

$sum = function($a, $b) {
    return $a + $b;
};

echo $sum(5, 7);

?>
<?php

function process($callback) {
    echo "بدء المعالجة...<br>";
    $callback();
}

process(function() {
    echo "تم التنفيذ داخل الكول باك!";
});

?>
<?php

class Student {

    public function sayHello() {
        echo "مرحبًا، أنا طالب!";
    }
}

$st = new Student();
$st->sayHello();

?>
<?php

class User {
    public $name;

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User();
$user->setName("أحمد");

echo $user->getName(); // أحمد

?>
<?php

function factorial($n) {
    if ($n == 1) return 1;

    return $n * factorial($n - 1);
}

echo factorial(5); // 120

?>
<?php

function printLevels($level) {
    echo "المستوى: $level<br>";

    if ($level == 0) return;

    printLevels($level - 1);
}

printLevels(4);

?>
<?php

$message = "مرحبًا";

$greeter = function() use ($message) {
    echo $message;
};

$greeter();

?>
<?php

$sum = fn($a, $b) => $a + $b;

echo $sum(5, 7);

?>
<?php

function applyTo($value, $fn) {
    return $fn($value);
}

echo applyTo(5, fn($n) => $n * 10); // 50

?>
<?php

function multiply($a) {
    return function($b) use ($a) {
        return function($c) use ($a, $b) {
            return $a * $b * $c;
        };
    };
}

echo multiply(2)(3)(4); // 24

?>
<?php

function minLength($min) {
    return function($text) use ($min) {
        return strlen($text) >= $min;
    };
}

$validateName = minLength(5);

echo $validateName("Ali");    // false
echo $validateName("Ahmed");  // true

?>
<?php

function double($n) {
    return $n * 2;
}

function increment($n) {
    return $n + 1;
}

function compose($f, $g) {
    return function($x) use ($f, $g) {
        return $f($g($x));
    };
}

$combined = compose('double', 'increment');

echo $combined(5); // (5 + 1) × 2 = 12

?>
<?php

try {

    $pdo = new PDO("mysql:host=localhost;dbname=php_course;charset=utf8", "root", "");

    // تفعيل وضع الأخطاء
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "تم الاتصال بنجاح!";

} catch (PDOException $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}

?>
<?php

$stmt = $pdo->prepare("INSERT INTO students (name, email, age) VALUES (?, ?, ?)");

$stmt->execute(["أحمد", "ahmed@gmail.com", 20]);

echo "تمت الإضافة بنجاح";

?>
<?php

$stmt = $pdo->query("SELECT * FROM students");

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($students);
echo "</pre>";

?>
<?php

$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([3]);

$student = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($student);

?>
<?php

$stmt = $pdo->prepare("UPDATE students SET name = ?, email = ?, age = ? WHERE id = ?");

$stmt->execute(["سارة", "sara@mail.com", 21, 3]);

echo "تم التحديث بنجاح";

?>
<?php

$stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
$stmt->execute([3]);

echo "تم الحذف بنجاح";

?>
<?php

class Database {

    private $host = "localhost";
    private $db   = "php_course";
    private $user = "root";
    private $pass = "";

    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->db};charset=utf8",
                $this->user,
                $this->pass
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("فشل الاتصال: " . $e->getMessage());
        }
    }

}

?>
<?php

require_once "database.php";

class StudentRepository {

    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->pdo;
    }

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $email, $age) {
        $stmt = $this->pdo->prepare("INSERT INTO students (name, email, age) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $age]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM students WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>
