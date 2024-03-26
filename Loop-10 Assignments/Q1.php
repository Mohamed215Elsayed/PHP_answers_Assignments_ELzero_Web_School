<?php
/*
لديك متغير index قيمته 10 لا تقم بالتعديل عليه
نريد أن تطبع الأرقام تحت بعضها من رقم 10 وحتى رقم 1
*/
$index = 10;
for($index; $index > 0; $index--){
    echo $index . '<br>';
}
//second solution
// while($index > 0){
//     echo $index . '<br>';
//     $index--;
// }
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1
