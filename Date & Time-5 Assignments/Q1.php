<?php
/*
قم بتغيير ال Time Zone لمدينة الرياض
في السطر الأول قم بطباعة ال Time Zone
في السطر الثاني قم بطباعة التاريخ كما في المثال
في السطر الثالث قم بطباعة التاريخ كما في المثال
طبعا التاريخ سيكون مختلف ولكن نريده بنفس التنسيق
*/
// // Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"

date_default_timezone_set("Asia/Riyadh");//set it to "Asia/Riyadh"
echo date_default_timezone_get() . "<br>";//"Asia/Riyadh"

$date_me = date_create();

echo date_format($date_me, "D, d M y - h:i:s A") . "<br>";//Sun, 24 Mar 24 - 12:49:16 AM

echo date_format($date_me, "l, d F Y - h:i:s A") . "<br>";//Sunday, 24 March 2024 - 12:50:29 AM