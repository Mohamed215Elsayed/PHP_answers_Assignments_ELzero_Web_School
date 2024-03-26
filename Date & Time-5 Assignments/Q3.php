<?php
/*
لديك تاريخ مناسبة معينة
قم بتغيير ال Time Zone لمدينة القاهرة في مصر
قم بطباعة السطرين كما في المثال
نريد حساب عدد الأيام والسنين من بداية الوقت حتى التاريخ الموجود
قم بعمل المطلوب بدون إستخدام Date_Diff Function
*/
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

$date = "1990-10-01";
//start your code from here
$seconds = strtotime($date);
// echo $seconds/60/60/24/356 . "<br>";//654735600  7577.9583333333  21.286399812734
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";

echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($seconds / 60 / 60 / 24, 2) . " Days<br>";
//From Epoch Time Till 1990-10-01 Is Approximately 7577.96 Days
echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($seconds / 60 / 60 / 24 / 365, 1) . " Years";
// From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years
