<?php
/*
لديك المتغير التالي يحتوي على HTML Tags نحتاج أن نزيل منها ال <div> ونترك الباقي
شاهد المثال لتفهم المطلوب
*/
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>");//"<b>"=> allowed tags
// <b>Elzero</b>