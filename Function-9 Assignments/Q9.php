<?php
/* --------------------------------قم بعمل Anonymous Function تكتب رسالة ترحيبية
بعد عمل ال Function قم بعمل نسخة منها بواسطة ال Arrow Function Syntax
شاهد المثال لتفهم المطلوب
*/
// Write Function Content Here
// Needed Output
// echo $greet("Osama"); // Greetings

// Solution of Anonymous Function
$greet = function ($name) {
    return "Greetings";
};
echo $greet("Osama")."<br>"; // Greetings

$greet = fn($name) => "Greetings";
echo $greet("Osama"); // Greetings