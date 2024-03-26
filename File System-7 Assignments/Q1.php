<?php
//create files command
// touch('Q2.php');
// touch('Q3.php');
// touch('Q4.php');
// touch('Q5.php');
// touch('Q6.php');
// touch('Q7.php');
/******************* */
/*
قم بحساب المساحة الكلية لجميع ال Drives الموجودة في جهازك ولو كانوا كثير يكفي أول إثنين فقط
يجب طباعة المساحة بالتيرابايت شاهد المثال لترى المطلوب
يجب أن يكون هناك رقمين فقط بعد العلامة العشرية
*/
// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"

//start your code from here
echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2)." Terabyte<br>";//0.23 Terabyte

echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2)." Terabyte<br>";//0.91 Terabyte
