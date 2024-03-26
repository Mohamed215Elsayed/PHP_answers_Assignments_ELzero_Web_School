<?php 
/*
لديك متغير يحتوي على كلمة ولا يمكن التعديل عليه
نريد إستخدام 3 من ال Built In Functions لتخرج النتيجة المطلوبة
يجب أن يتم إستخدامهم كلهم في نفس السطر
لا يمكنك إضافة حروف ولا أرقام ولا أي شيء ويمكنك فقط إستعمال ال Built-In Functions
*/
$str = "Orezle";
// echo strrev($str)."<br>";//elzerO
// echo strtolower(strrev($str))."<br>";//elzero
echo ucfirst(strtolower(strrev($str)))."<br>";//Elzero
