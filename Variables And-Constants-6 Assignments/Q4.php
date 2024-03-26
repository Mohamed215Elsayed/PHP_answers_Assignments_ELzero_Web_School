<?php
/*إستخدم ال Predefined Variables لتطبع القيم التالية
السطر الأول Document Root
السطر الثاني Server Name
السطر الثالث System Root
السطر الرابع Open SSL Configuration */

// "C:/xampp/htdocs"
// "localhost"
// "C:\WINDOWS"
// "C:/xampp/apache/bin/openssl.cnf"


echo $_SERVER['DOCUMENT_ROOT'].'<br>';//D:/XAMPP/htdocs
echo $_SERVER["HTTP_HOST"] .'<br>';//localhost
echo $_SERVER['SystemRoot'].'<br>';//C:\Windows
echo $_SERVER['OPENSSL_CONF'].'<br>';//D:/XAMPP/apache/bin/openssl.cnf

// echo __DIR__  .'<br>';
// D:\XAMPP\htdocs\work\PHP_answers_Assignments_ELzero_Web_School\Variables And-Constants-6 Assignments
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

