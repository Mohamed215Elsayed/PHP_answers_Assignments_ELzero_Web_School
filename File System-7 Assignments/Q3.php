<?php
/*
قم بإنشاء Directory جديد بإسم Programming وداخله Directory بإسم PHP
نحتاج التراخيص أن تكون لل Owner فقط هو من يستطيع عمل Read, Write, Execute والباقي يقوموا بعمل Execute فقط
جميع ال Directories طبعا لها نفس التراخيص
بعد إنشاء ال Directories نريد حذفهم مرة أخرى ولكن عند تشغيل ال Script مرة واحدة يقوم بحذفهم جميعا
نريد عدم وجود Warning إذا تم تشغيل ال Script مرة أخرى بعد حذف ال Directories
إستخدم ما تعلمته مع بعض البحث لتطبع رسالة تفيد أنه تم حذف ال Directory بنجاح. شاهد المثال
*/
// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"

// mkdir("Programming/PHP", 0711, True);//create dir then comment it
if (file_exists("Programming\PHP")) {

    rmdir("Programming\PHP");

    echo "Directory Programmin\PHP Removed<br>";

}
if (file_exists("Programming")) {

    rmdir("Programming");

    echo "Directory Programmin Removed";

}