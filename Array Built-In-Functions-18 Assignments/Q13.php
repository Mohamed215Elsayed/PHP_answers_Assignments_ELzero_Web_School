<?php
/*
لديك ال Array التالية
بدون إستخدام أي Function جاهزة مطلوب إيجاد أكبر عنصر في ال Array
*/
//it is an algoritm 
$nums = [10, 100, -20, 50, 30];
$max = $nums[0];
for ($i = 1; $i < count($nums); $i++) {
    if ($nums[$i] > $max) {
        $max = $nums[$i];
    }
}
echo $max;

// 100