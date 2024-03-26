<?php
/* --------------------------------لديك Array فيها أرقام وحروف
المطلوب طباعة الأرقام فقط تحت بعضها
في السطر قبل الأخير قم بطباعة عدد الأرقام التي تم طباعتها بطريقة برمجية
في السطر الأخير قم بطباعة عدد الحروف التي تم تجاهلها بطريقة برمجية
لاحظ أن ال Array يمكن أن تتغير لذلك لا تقم بحساب عدد العناصر بنفسك
*/
$mix = [1, 2, "A", "B", "C", 3, 4];
$count_INT = 0;
$count_Letters = 0;
foreach ($mix as $Value) {
    if (gettype($Value) == "integer") {
        echo "$Value <br>";
        $count_INT++;
    }
    else {
        $count_Letters++;
    }
}
echo "$count_INT Number Printed <br>";
echo "$count_Letters Letters Ignored";
/*************************/
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"