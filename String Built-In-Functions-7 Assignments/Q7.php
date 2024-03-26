<?php
/*
لديك ال Array التالية تحتوي على أرقام وحروف
لا نحتاج للأرقام في طباعة النتيجة
إستخدم ما تعلمته لتخرج بالقيمة المطلوبة “Elzero”
*/
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
//solution
$str = "";
foreach ($chars as $char) {
    if (gettype($char) == "string") {
        $str .= $char;
        $str = ucfirst(strtolower($str));
    }
}
echo $str; // "Elzero"
