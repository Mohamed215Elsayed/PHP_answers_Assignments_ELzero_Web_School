<?php 
/*
لديك مجموعة من الروابط في متغيرات
المطلوب إستخدام ال If Condition المختصرة للتأكد من الروابط صالحة أم لا Valid Or Not Valid
ثم بعد ذلك تطبع النتيجة. شاهد المثال لتفهم الفكرة
*/
$url1 = "http://www.elz ero.org";

$url2 = "http://¥elzero.org";

$url3 = "https://elzero.org";

$url4 = "https://elzero.o¥rg";
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
//start your code here
if(filter_var($url4, FILTER_VALIDATE_URL)) {
    echo "A Valid URL";
} else {
    echo "Not A Valid URL";
}


