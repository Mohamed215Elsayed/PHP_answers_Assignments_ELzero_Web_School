<?php
/*
لديك Function بإسم change_permissions تقبل منك Parameter واحد وهو إسم الملف
يجب أن نتأكد أولا أن ال Parameter هو ملف وليس Directory
يجب أن نتأكد أن الملف إمتداده هو txt وليس أي إمتداد آخر
بعد أن تتحقق الشروط نريد تغيير التراخيص الخاصة بالملف
نريد أن يكون ال Owner له صلاحيات لعمل كل شيء ولا يوجد أي صلاحيات نهائيا للباقي
قم بتجربة ال Function على حسب الأمثلة بالأسفل لتتأكد أنها تعمل بشكل سليم
يجب أن تتأكد أنه تم تغيير التراخيص بنجاح ثم تطبع رسالة “Permissions Changed” إذا كان نوع الملف txt
*/
function change_permissions($file){
    if (dirname($file) == ".") {
        echo "This Is Directory And Only Files Allowed<br>";
    }
    else if (pathinfo($file, PATHINFO_EXTENSION) !== "txt") {
        echo "File Extension Is Not Txt<br>";
    }else {
        fopen($file, "c+");
        chmod($file, 0700);
        echo "Permissions Are Changed";
    }
}

// Test Cases
echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt")."<br>"; // Permissions Changed