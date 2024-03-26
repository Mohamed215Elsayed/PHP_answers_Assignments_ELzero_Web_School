<?php
/* لديك ال Array التالية
المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب
يجب عمل الحل مرة بواسطة ال Array_Reduce مع إستخدام Anonymous Function
ثم عمله مرة أخرى بوسيلة أخرى
*/
$nums = [10, 20, 30];
echo array_sum($nums) . "<br>";//built-in function method
echo array_reduce($nums, fn($cur, $acum) => $cur + $acum);
//Needed Output
// 60
// 60