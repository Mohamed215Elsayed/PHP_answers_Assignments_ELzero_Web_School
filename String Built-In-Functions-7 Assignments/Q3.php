<?php
/*
لديك متغيرات تحتوي على أرقام وحروف لتساعدك في تنفيذ المطلوب
لا يجب التعديل نهائيا على المتغيرات جميعها
إستخدم قيم المتغيرات لتخرج بالنتيجة المطلوبة
غير مسموح نهائيا بإستخدام اي شيء غير قيم المتغيرات المتاحة فقط
نريد إستخدام 3 من ال Built In Functions لتخرج النتيجة المطلوبة
يجب أن يتم إستخدامهم كلهم في نفس السطر
*/
$str = 'aAa';
$num = 3;
$char = "_";
echo strtolower($str)."<br>";//aaa
echo str_repeat(strtolower($str),$num)."<br>";//aaaaaaaaa
echo chunk_split(str_repeat(strtolower($str),$num),$num,$char)."<br>";//aaa_aaa_aaa_
