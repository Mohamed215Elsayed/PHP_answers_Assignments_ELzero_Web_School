<?php
/*
قم بإنشاء Function تقبل عدد غير معروف من ال Arguments
المطلوب جميع جميع ال Arguments بجانب بعضهم في متغير بإسم all
المطلوب عمل Return لقيمة هذا المتغير
المطلوب جلب ال Arguments بطريقتين مختلفتين
شاهد المثال لتفهم الفكرة
*/
// Write Function Content Here

// Needed Output
// echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// echo get_arguments("I", "Love", "PHP"); // I Love PHP
//start your code from here
//first solution
function get_arguments(...$words) {
    $all = "";
    foreach ($words as $word) {
        $all .= "$word ";
    }
    return $all;
}
echo get_arguments("Hello", "Elzero", "Web", "School")."<br>";
echo get_arguments("I", "Love", "PHP")."<br>";

//second solution
function get_arguments_2(){
    $all = "";
    foreach (func_get_args() as $word) {
        $all .= "$word ";
    }
    return $all;
}
echo get_arguments_2("Hello", "Elzero", "Web", "School")."<br>";
echo get_arguments_2("I", "Love", "PHP")."<br>";

