<?php
/* --------------------------------قم بإنشاء Function تقوم بالترحيب بالأشخاص
ال Function تقبل إثنين Parameters وهم إسم الشخص ونوعه
بناء على نوع الشخص تكتب له ال Title المناسب Mr For Male, Miss For Female
إذا لم يكتب النوع لا تكتب أي Title قبل الإسم
شاهد المثال لتفهم الفكرة
*/
function greeting($name, $gender = ""){
    if ($gender == "Male" || $gender == "male") {
        echo "Hello Mr $name";
    }
    elseif ($gender == "Female" || $gender == "female") {
        echo "Hello Miss $name";
    }
    else {
        echo "Hello $name";
    }
}
// Needed Output (Test Cases)
echo greeting("Osama", "Male")."<br>"; // Hello Mr Osama
echo greeting("Eman", "Female")."<br>"; // Hello Miss Eman
echo greeting("Sameh")."<br>"; // Hello Sameh
