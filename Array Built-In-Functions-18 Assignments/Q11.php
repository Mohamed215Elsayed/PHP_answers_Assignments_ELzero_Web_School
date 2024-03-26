<?Php
/*
لديك ال Array التالية
بدون إستخدام أي Function جاهزة قم بحساب عدد عناصر ال Array
*/
$arr = ["A", "B", "C", "D", "E"];
$count = 0;//initialization
//first solution is simple
foreach ($arr as $element) {
    $count++;
}
//second solution
// for ($i = 0; isset($arr[$i]); $i++) {
//     $count++;
// }
echo $count;
// 5