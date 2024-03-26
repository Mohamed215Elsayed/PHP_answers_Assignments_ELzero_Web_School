<?php
/* 
لديك ال Array التالية
بدون إستخدام أي Function جاهزة مطلوب إيجاد أصغر عنصر في ال Array
*/
//it is an algorithm
$nums = [10, 100, -20, 50, 30];
$min = $nums[0];
for ($i = 1; $i < count($nums); $i++) {
    if ($nums[$i] < $min) {
        $min = $nums[$i];
    }
}
echo $min;

// -20