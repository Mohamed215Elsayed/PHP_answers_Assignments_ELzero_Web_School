<?php 
/*
لديك ال Code التالي في الأسفل
ممنوع التعديل على الأرقام نهائيا ولا أماكنها
إستخدم ما تعلمته لتجعل النتيجة النهائية رقم 50 ونوع البيانات Integer
في السطر الأول قم بطباعة الرقم وفي الثاني Integer
*/

echo intval(15.2) + intval(14.7) + (10.5 + 10.5); // 50
echo "<br>";
echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5);//50
echo "<br>";
echo floor(15.2) +  floor(14.7) + floor(10.5 + 10.5);//50
echo "<br>";
echo gettype(intval(15.2) + intval(14.7) + intval(10.5 + 10.5)) . "<br>";
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer   
