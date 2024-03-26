<?php 
/*
قم بإستعمال 3 طرق تقوم بجلب نفس النتيجة الخاصة ب time() Function
شاهد النتيجة لتفهم الفكرة
*/
//OUTPUT Needed
// 1668020233
// 1668020233
// 1668020233

// Methoh One Ya My zmeil 
echo time() . "<br>"; //1711232284

//Method Two Ya My zmeil
echo getdate()[0] . "<br>";//1711232284

//Method Three Ya My zmeil 
$now = date("Y-m-d H:i:s");
echo strtotime($now);//1711232284




// echo "<pre>";
// print_r(getdate());
// echo "</pre>";
// Array
// (
//     [seconds] => 50
//     [minutes] => 15
//     [hours] => 23
//     [mday] => 23
//     [wday] => 6
//     [mon] => 3
//     [year] => 2024
//     [yday] => 82
//     [weekday] => Saturday
//     [month] => March
//     [0] => 1711232150
// )