<?php
/*
لديك ال Array التالية
المطلوب إضافة عنصر “D” لنهاية ال Array بأربع طرق مختلفة
*/
$chars = ["A", "B", "C"];

// $chars[3] = "D";//1
// $chars[count($chars)] = "D";//2
// $chars[] = "D";//3 more efficiency and fast

array_push($chars, "D");//4

echo "<pre>";
print_r($chars);
echo "</pre>";
/******************/
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )