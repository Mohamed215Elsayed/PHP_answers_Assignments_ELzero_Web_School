<?php
/*
لديك المتغير التالي قيمته 10 ونوعه String وبداخله رقم
المطلوب طباعة الرقم ك Integer وفي السطر الذي يليه تطبع نوعه لتتأكد أنه Integer
المطلوب تكرار ما سبق ب 3 طرق مختلفة
إذا كنت ممن يحب أن يسبق الدورة التعليمية وتحب البحث كثيرا قم بعمل ما سبق بطريقتين إضافيتين ليصبح المجموع 5 طرق
*/
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

// // For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"
//solution
$a = "10";

echo +$a .'<br>';
echo +"10" .'<br>';
echo (int) $a .'<br>';
echo (integer) $a  .'<br>';
echo intval($a) .'<br>';


var_dump(+$a);
echo '<br>';
echo var_dump((int) $a);
echo '<br>';
echo var_dump((integer) $a);
echo '<br>';
var_dump(intval($a));
echo '<br>';

settype($a, "int");
echo $a . '<br>';
echo gettype($a);


