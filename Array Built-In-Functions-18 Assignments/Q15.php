<?php
// it is an implementation for reverse fn
/* 
لديك ال Array التالية
ممنوع إستخدام أي Function جاهزة لعمل المطلوب
يمكنك فقط إستخدام رقم 0 مع ما تعلمته لتصل للمطلوب
*/
$chars = ["o", "r", "e", "z", "l", "E"];
$index = count($chars) - (int)true;//5 "intialization"
$result = "";
while ($index >= (int)false) {//condition index is 5(E)then .....
    $result .= $chars[$index];//operation
    $index--;//decrement
}
echo $result . "<br>";
// Output: "Elzero"