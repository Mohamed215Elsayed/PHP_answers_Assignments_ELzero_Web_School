<?php
/*
لديك ال Array التالية
بدون إستخدام أي Function جاهزة قم بحساب مجموع الأرقام الموجودة في ال Array
*/
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
foreach ($nums as $num) {
    $sum += $num;
}
echo $sum;
// 100