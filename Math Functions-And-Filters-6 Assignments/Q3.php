<?php
// لديك الأرقام التالية والمطلوب إستخدام ال Round فقط لتقريب الرقم للنتيجة الموجودة بجانب الرقم

$num1 = 11.5;//11
echo round($num1, 0, PHP_ROUND_HALF_ODD) . "<br>"; // 11
// echo floor($num1) . "<br>"; // 11

$num2 = 9.4898;
echo round($num2, 1) . "<br>"; // 9.5

$num3 = -7.5;//-7
echo round($num3, 0, PHP_ROUND_HALF_DOWN); // -7
