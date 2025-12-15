<!--ولاً: دوال التاريخ (Date Functions) في PHP

1) date()

ترجع التاريخ/الوقت بصيغة معينة.-->
<?php
echo date("Y-m-d"); 
?>

<!--2) checkdate()

تتحقق إذا كان التاريخ صحيحًا أم لا.-->
<?php
var_dump(checkdate(2, 29, 2025)); 
?>

<!--
3) strtotime()

تحول نص يمثل تاريخًا إلى Timestamp.-->
<?php
echo strtotime("2025-05-10");
?>


<!--
4) mktime()

إنشاء تاريخ (Timestamp) من عناصره.-->
<?php
echo mktime(0, 0, 0, 5, 10, 2025);
?>

<!--

5) idate()

ترجع جزءًا من التاريخ كرقم.-->
<?php
echo idate("Y"); 
?>

<!--
6) getdate()

ترجع عناصر التاريخ في مصفوفة.-->
<?php
print_r(getdate());
?>
<!--
7) gmdate()
ترجع التاريخ بتوقيت GMT.-->
<?php
echo gmdate("Y-m-d");
?>

<!--
8) date_parse()

تحليل نص تاريخ وإرجاع تفاصيله.-->
<?php
print_r(date_parse("2025-05-10"));
?>
<!--
9) date_parse_from_format()

تحليل التاريخ حسب صيغة معينة.-->
<?php
print_r(date_parse_from_format("d/m/Y", "10/05/2025"));

?>
<!--
10) strftime()

تنسيق التاريخ حسب إعدادات النظام.-->
<?php
echo strftime("%Y-%m-%d");

?>
<!--
11) gmstrftime()

تنسيق التاريخ بتوقيت GMT.-->
<?php
echo gmstrftime("%Y-%m-%d");
?>

<!--
12) DateTime

كائن للتعامل المتقدم مع التاريخ.-->
<?php
$dt = new DateTime("2025-05-10");
echo $dt->format("Y-m-d");
?>

<!--
13) DateTime::modify()

تغيير التاريخ بإضافة أيام أو طرحها.-->
<?php
$dt = new DateTime("2025-05-10");
$dt->modify("+3 days");
echo $dt->format("Y-m-d"); 
?>

<!--
14) DateTime::diff()

حساب الفرق بين تاريخين.-->
<?php
$d1 = new DateTime("2025-01-01");
$d2 = new DateTime("2025-12-31");
$diff = $d1->diff($d2);
echo $diff->days; 
?>
<!--

15) DateInterval

فترة زمنية تُستخدم مع DateTime.-->
<?php
$dt = new DateTime("2025-01-01");
$dt->add(new DateInterval("P1M")); // إضافة شهر
echo $dt->format("Y-m-d");
?>

<!--
16) date_sunrise() / date_sunset()

أوقات الشروق والغروب.-->
<?php
echo date_sunrise(time(), SUNFUNCS_RET_STRING, 24.7, 46.7); // مثال
?>

<!--
 ثانيًا: دوال الوقت (Time Functions) في PHP

1) time()

ترجع الوقت الحالي كـ Timestamp.-->
<?php
echo time();

?>

<!--
2) microtime()

ترجع الوقت بالميكروثواني.-->
<?php
echo microtime(true); 
?>

<!--
3) sleep()

إيقاف الكود لثوانٍ محددة.-->
<?php
sleep(2); 
echo "تم الانتظار ثانيتين";
?>
<!--

4) usleep()

إيقاف التنفيذ بالميكروثانية.-->
<?php
usleep(500000); // نصف ثانية
echo "نصف ثانية";
?>
<!--

5) gettimeofday()

ترجع تفاصيل الوقت بدقة عالية.-->
<?php
print_r(gettimeofday());

?>

<!--
6) localtime()

ترجع الوقت الحالي كمصفوفة رقمية.-->
<?php
print_r(localtime(time(), true));
?>

<!--
7) gmmktime()

إنشاء Timestamp بتوقيت GMT.-->
<?php
echo gmmktime(0, 0, 0, 5, 10, 2025);
?>
<!--
8) DateTime::setTimestamp()

إعطاء وقت معين لكائن DateTime.-->
<?php
$dt = new DateTime();
$dt->setTimestamp(1736500000);
echo $dt->format("Y-m-d H:i:s");
?>
<!--
9) DateTime::add() / sub()

إضافة أو طرح وقت.-->
<?php
$dt = new DateTime();
$dt->add(new DateInterval("PT1H")); // إضافة ساعة
echo $dt->format("H:i:s");
?>
<!--
10) date_default_timezone_set()

تحديد المنطقة الزمنية.-->
<?php
date_default_timezone_set("Asia/Riyadh");
?>

<!--
11) date_default_timezone_get()

معرفة المنطقة الزمنية الحالية.-->
<?php
echo date_default_timezone_get();
?>