<?php
/*
قم بإنشاء Function تطبع رسالة للمستخدم فيها إسمه وسنه وهل هو متاح للعمل أم لا
ال Function تقبل ثلاثة Parameters الإسم والسن والحالة. وتكون أسمائهم a, b, c
أنواع البيانات ستكون String للإسم و Number للسن و Boolean للحالة
البيانات سوف يتم إستخدامها داخل ال Function بشكل عشوائي وليس لهم ترتيب معين
البيانات غير مرتبة وليس لها إسم يعبر عنها يجب عليك طباعة الرسالة بناء على نوع البيانات لتكون رسالة منطقية.
حالة العمل يمكن أن تكون True أو False وبناء عليها تتغير الرسالة
لا تقم بالتعديل على ال Parameters ولا ال Arguments
إستخدام ال Named Arguments غير مناسب حل التحدي
شاهد الأمثلة لتفهم الفكرة
*/
/****************first solution=> stupid **************** */
// function check_status($name, $age, $available) {
//     if (gettype($name) === 'string' && gettype($age) === 'integer' && gettype($available) === 'boolean') {
//         if ($available) {
//             return "Hello $name, Your Age Is $age, You Are Available For Hire";
//         }
//         else {
//             return "Hello $name, Your Age Is $age, You Are Not Available For Hire";
//         }
//     }
//     elseif (gettype($name) === 'integer' && gettype($age) === 'string' && gettype($available) === 'boolean') {
//         return "Hello $age, Your Name Is $name, You Are Available For Hire";
//     }
//     elseif (gettype($name) === 'boolean' && gettype($age) === 'integer' && gettype($available) === 'string') {
//         if ($available) {
//             return "Hello $available, Your Name Is $age, You Are Available For Hire";
//         }
//         else {
//             return "Hello $available, Your Name Is $age, You Are Not Available For Hire";
//         }
//     }
//     elseif (gettype($name) === 'boolean' && gettype($age) === 'string' && gettype($available) === 'integer') {
//         if ($age) {
//             return "Hello $age, Your Name Is $available, You Are Not Available For Hire";
//         } else {
//             return "Hello $age, Your Name Is $available, You Are Available For Hire";
//         }
//     }
// }
/***********second solution**************** */
// function check_status($a, $b, $c){
//     $name = "";
//     $age = 0;
//     $status = "";
//     if (gettype($a) == "string") {
//         $name = $a;
//     }
//     elseif (gettype($b) == "string") {
//             $name = $b;
//     }
//     elseif  (gettype($c) == "string") {
//             $name = $c;
//     }

//     if (gettype($a) == "integer") {
//         $age = $a;
//     }
//     elseif (gettype($b) == "integer") {
//         $age = $b;
//     }
//     elseif  (gettype($c) == "integer") {
//         $age = $c;
//     }

//     if (gettype($a) == "boolean") {
//         $status = $a;
//     }
//     elseif (gettype($b) == "boolean") {
//         $status = $b;
//     }
//     elseif  (gettype($c) == "boolean") {
//         $status = $c;
//     }

//     if ($status) {
//         return "Hello $name, Your Age Is $age, You Are Available For Hire";
//     }
//     else {
//         return "Hello $name, Your Age Is $age, You Are Not Available For Hire";
//     }
// }
/****************third solution******************* */
// function check_status($a, $b, $c){
//     $name = (gettype($a) == "string")
//     ? $a
//     : ((gettype($b) == "string")
//     ? $b
//     : $c);

//     $age = (gettype($a) == "integer")
//     ? $a
//     : ((gettype($b) == "integer")
//     ? $b
//     : $c);

//     $status = (gettype($a) == "boolean")
//     ? $a
//     : ((gettype($b) == "boolean")
//     ? $b
//     : $c);

//     $msg ="Hello $name, Your Age Is $age, You Are ";
//     if ($status) {
//         $msg .= "Available For Hire";
//     }
//     else {
//         $msg .= "Not Available For Hire";
//     }
//     return $msg;

// }
/************************fourth solution**************** */
function check_status($a, $b, $c) {
    $name = null;
    $age = null;
    $status = null;

    if (is_string($a)) {
        $name = $a;
    }
    else if (is_string($b)) {
        $name = $b;
    }
    else if (is_string($c)) {
        $name = $c;
    }

    if (is_numeric($a)) {
        $age = $a;
    }
    else if (is_numeric($b)) {
        $age = $b;
    }
    else if (is_numeric($c)) {
        $age = $c;
    }

    if (is_bool($a)) {
        $status = $a;
    }
    else if (is_bool($b)) {
        $status = $b;
    }
    else if (is_bool($c)) {
        $status = $c;
    }
    
    $message = "Hello " . $name . ", Your Age Is " . $age . ", You Are " . ($status === true ? 'Available For Hire' : 'Not Available For Hire');
    return $message;
}
/******************************** */
echo check_status("Osama", 38, true)."<br>"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true)."<br>"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama")."<br>"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38)."<br>"; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"