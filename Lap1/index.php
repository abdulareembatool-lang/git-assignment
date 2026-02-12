دوال المصفوفات والنصوص في PHP (30 دالة) — مع أمثلة كاملة داخل الوسوم
دوال المصفوفات
count()
ترجع عدد العناصر داخل المصفوفة.

<?php
$numbers = [10, 20, 30];
echo count($numbers);
?>

array_push()
إضافة عنصر جديد في نهاية المصفوفة.

<?php
$data = [1, 2];
array_push($data, 3);
print_r($data);
?>

array_pop()
حذف آخر عنصر من المصفوفة.

<?php
$data = [1, 2, 3];
array_pop($data);
print_r($data);
?>

array_shift()
حذف أول عنصر من المصفوفة.

<?php
$data = ["A", "B", "C"];
array_shift($data);
print_r($data);
?>

array_unshift()
إضافة عنصر في بداية المصفوفة.

<?php
$data = ["B", "C"];
array_unshift($data, "A");
print_r($data);
?>

array_merge()
دمج مصفوفتين.

<?php
$a = [1, 2];
$b = [3, 4];
$merged = array_merge($a, $b);
print_r($merged);
?>

in_array()
التحقق من وجود قيمة داخل المصفوفة.

<?php
$names = ["Ali", "Sara"];
if (in_array("Sara", $names)) {
    echo "Found";
}
?>

array_search()
إرجاع موقع العنصر.

<?php
$colors = ["Red", "Blue", "Green"];
echo array_search("Blue", $colors);
?>

array_reverse()
عكس ترتيب المصفوفة.

<?php
$nums = [1, 2, 3];
$rev = array_reverse($nums);
print_r($rev);
?>

sort()
ترتيب تصاعدي.

<?php
$nums = [3, 1, 2];
sort($nums);
print_r($nums);
?>

rsort()
ترتيب تنازلي.

<?php
$nums = [3, 1, 2];
rsort($nums);
print_r($nums);
?>

implode()
تحويل مصفوفة إلى نص.

<?php
$letters = ["A", "B", "C"];
echo implode("-", $letters);
?>

explode()
تحويل نص إلى مصفوفة.

<?php
$text = "A-B-C";
$result = explode("-", $text);
print_r($result);
?>

array_keys()
إرجاع المفاتيح.

<?php
$user = ["name" => "Lina", "age" => 20];
$k = array_keys($user);
print_r($k);
?>

array_values()
إرجاع القيم.

<?php
$user = ["name" => "Lina", "age" => 20];
$v = array_values($user);
print_r($v);
?>

دوال النصوص
strlen()
ترجع طول النص.

<?php
echo strlen("PHP");
?>

str_word_count()
ترجع عدد الكلمات.

<?php
echo str_word_count("I love PHP");
?>

strrev()
عكس النص.

<?php
echo strrev("Hello");
?>

strtoupper()
تحويل لحروف كبيرة.

<?php
echo strtoupper("hello");
?>

strtolower()
تحويل لحروف صغيرة.

<?php
echo strtolower("HELLO");
?>

ucfirst()
تكبير أول حرف.

<?php
echo ucfirst("php language");
?>

ucwords()
تكبير أول حرف في كل كلمة.

<?php
echo ucwords("php is fun");
?>

trim()
حذف الفراغات من الطرفين.

<?php
$text = "  hello  ";
echo trim($text);
?>

ltrim()
حذف الفراغات من اليسار.

<?php
echo ltrim("   PHP");
?>

rtrim()
حذف الفراغات من اليمين.

<?php
echo rtrim("PHP   ");
?>

substr()
استخراج جزء من النص.

<?php
echo substr("Programming", 0, 4);
?>

str_replace()
استبدال نص بنص آخر.

<?php
echo str_replace("World", "PHP", "Hello World");
?>

strpos()
إيجاد موقع كلمة.

<?php
echo strpos("Hello PHP", "PHP");
?>

strcmp()
مقارنة نصّين.

<?php
echo strcmp("apple", "apple");
?>

addslashes()
إضافة شرطة معكوسة للحماية.

<?php
echo addslashes("He said: 'Hello'");
?>



بتول القدمي 
تقنية المعلومات
المستوى الثالث
