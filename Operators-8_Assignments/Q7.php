<?php
/* --------------------------------لديك العملية الحسابية التالية
ممنوع تغيير الأرقام ولا ال Operators نهائيا
ممنوع التعديل في أماكن المتغيرات
المطلوب أن تكون النتيجة رقم 10000
*/

$a = 10;
$b = 20;
// echo ($a + $b) * ($a + $b )+ $a * $a * $a; // 1230 ((30*30 + 10*10)*30)
echo (($a + $b) * ($a + $b) + ($a * $a)) * $a; // 10000