<?php
/*********************** */
/*
لدينا ملف txt بإسم elzero.txt يحتوي على ثلاث سطور من النصوص
نريد قراءة أول سطرين فقط وطباعتهم في الصفحة على سطر واحد
لا نريد قراءة آخر سطر
إستخدم ما تعلمته لتقوم بعمل هذا التكليف ب 4 طرق مختلفة
شاهد محتوى الملف والنتيجة المطلوبة
يجب أن تكون الحلول كلها تعمل في وقت واحد
إذا إستخدمت ال fopen يجب أن تكون مرة واحدة فقط
*/
/****************Genaral settings*****************/
$file = fopen("elzero.txt", "c+");
/************Method One*********** */
echo fread($file, strlen("Hello Elzero Web\nSchool\n")) . "<br>";
/*************Method Two*********** */
// echo mb_strlen("Hello Elzero Web\r\nSchool\r\n","8bit") . "<br>";//26
// No Need To Read
rewind($file);
echo fread($file,26) . "<br>";
/**********Method Three*********** */
rewind($file);
for ($i = 0; $i < count(file("elzero.txt")) - 1; $i++) {
    echo fgets($file) . " ";
}
/********Method Four************* */
rewind($file);
echo "<br>";
echo fgets($file);
echo fgets($file) . "<br>";
/*********Method Five************ */
$last_line = fgets($file);
$content = file_get_contents("elzero.txt");
$content = str_replace($last_line, "", $content);
echo $content;
/********************* */
fclose($file);
/********************* */
// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"