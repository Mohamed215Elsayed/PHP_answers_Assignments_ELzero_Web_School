<?php
/* 
قم بعمل نفس ما سبق بإستخدام Date_Diff Function
*/
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
$date = "1990-10-01";

//start your code from here
$ourDate = date_create($date);
// var_dump($date1); 
$EPOC_Date = date_create("1-1-1970");
// var_dump($EPOC_Date);
$diff = date_diff($EPOC_Date, $ourDate);
// echo"<pre>";
// print_r($diff);
// echo"</pre>";
// DateInterval Object
// (
//     [y] => 20
//     [m] => 9
//     [d] => 0
//     [h] => 0
//     [i] => 0
//     [s] => 0
//     [f] => 0
//     [invert] => 0
//     [days] => 7578
//     [from_string] => 
// )
echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days . " Days<br>";

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y . " Years<br>";
