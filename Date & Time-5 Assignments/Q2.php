<?php 
/*
لديك تاريخ مناسبة معينة ونريد طباعته بالشكل المطلوب
قم بتغيير ال Time Zone لمدينة القاهرة في مصر
في السطر الأول قم بطباعة ال Time Zone
قم بزيادة 15 ساعة و 15 دقيقة و 15 ثانية على التاريخ الموجود
في السطر الثاني قم بطباعة التاريخ كما في المثال
*/
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:10"
//start your code from here
$date = "2005-10-02";
$MYDate = date_create($date);
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";//Africa/Cairo

date_modify($MYDate, "+15hours 15 minutes 15 seconds");

echo date_format($MYDate, "Y, F, l 'dS' H:i:s");
//2005, October, Sunday '02nd' 15:15:15


