<?php
/* جميع ما يلي من ال Codes به أخطاء
المطلوب عدم إظهار الخطأ وإظهار جملة Custom Error بدلا من الخطأ*/
// Code 1
$a = @$b or die("Variable Not Found");

// Code 2
$f = @file("Not_A_File") or die("File Not Found");

// Code 3
@include("Not_A_File") or die("File Not Found");