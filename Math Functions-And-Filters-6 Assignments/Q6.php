<?php 
/**لديك مجموعة من الروابط في متغيرات
المطلوب تنقية الروابط لتكون سليمة وصالحة
ثم بعد ذلك تطبع النتيجة. شاهد المثال لتفهم الفكرة
*/
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org
//start your code from here


echo filter_var($url1, FILTER_SANITIZE_URL);//http://www.elzero.org
echo "<br>";
echo filter_var($url2, FILTER_SANITIZE_URL);//http://elzero.org
echo "<br>";
echo filter_var($url3, FILTER_SANITIZE_URL);//https://elzero.org
echo "<br>";
echo filter_var($url4, FILTER_SANITIZE_URL);//https://elzero.org
