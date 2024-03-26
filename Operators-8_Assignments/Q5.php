<?php
/*
لديك المتغير التالي والمطلوب طباعة القيم كما في المثال
في المكان المخصص يمكنك كتابة ال Code الخاص بك لتخرج القيم بشكل سليم
ممنوع تغيير قيمة المتغير ولا كتابة اي أرقام بيدك
*/
$points = 10;
$points +=  true + true + (bool)"Hello";
echo $points; // 13
echo '<br>';
$points -= true + true + true + true + true;
echo $points; // 8;
