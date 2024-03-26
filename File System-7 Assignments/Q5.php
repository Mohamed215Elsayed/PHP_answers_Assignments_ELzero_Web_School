<?php
/*
إبحث عن أربع طرق لطباعة إسم الملف الحالي مع الإمتداد
شاهد النتيجة في الأسفل
*/
echo pathinfo(__FILE__)["basename"]  . "<br>";//Q5.php

echo pathinfo(__FILE__)["filename"]  . "." . pathinfo(__FILE__)["extension"] . "<br>";//Q5 . php

echo basename(__FILE__) . "<br>";//Q5.php

echo basename(__FILE__, ".php") . "." . pathinfo(__FILE__)["extension"];
// "Q5"."php"

// "index.php"
// "index.php"
// "index.php"
// "index.php"