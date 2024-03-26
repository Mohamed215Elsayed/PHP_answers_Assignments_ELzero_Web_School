<?php
/* 
لديك ال Array التالية
المطلوب عدم إستخدام ال Shuffle Function نهائيا
المطلوب عمل Shuffle للعناصر الموجودة داخل ال Array
*/
$nums = [1, 2, 3, 4, 5, 6];
//implementing Fisher-Yates algorithm(random shuffle)
//Fisher-Yates algorithm
function customShuffle(&$array) {
    $count = count($array);
    for ($i = $count - 1; $i > 0; $i--) {
        $j = mt_rand(0, $i);
        if ($j != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

customShuffle($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";
// Every Time The Array Elements Will Be Shuffled
// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )