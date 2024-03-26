<?php
/*
لديك ال Array التالية
إستخدم ما تعلمته لتقوم بعمل المطلوب
المطلوب عدم عرض ال Strings
طباعة الأرقام الفردية فقط
ترتيب الأرقام
*/
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
//first solution
$arr = array_filter($mix, fn($x)=>  is_Numeric($x) && $x%2 !=0 );
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
//second solution
echo "<br/>";
function filter_results($n){
    return gettype($n) == "integer" && $n % 2 == 1;
}
$arr = array_filter($mix, "filter_results");
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
/************** */
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )