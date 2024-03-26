<?php
/*
قم بإنشاء Function تقوم بضرب كل الأرقام التي تعطى لها ك Arguments في بعضها
إذا كان ال Argument المستخدم في ال Function عبارة عن String لا تستعمله مع الأرقام
إذا كان ال Argument عبارة عن Float قم بتحويله ل Integer قبل بدأ عملية الضرب
*/
// Write Function Content Here
// Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000

// Write Function Content Here
//first solution
function multiply(){
    $result = 1;
    foreach(func_get_args() as $arg){
        if(is_string($arg)){
            continue;
        }
        $result *= (int) ($arg);
    }
    return $result;
}

//second solution
// function multiply(...$nums){
//     $result = 1;
//     foreach ($nums as $num) {
//         if (gettype($num) !== "string") {
//             $result *= (int) $num;
//         }
//     }
//     return $result;
// }
//Test Cases
echo multiply(10, 20)."<br>"; // 200
echo multiply("A", 10, 30)."<br>"; // 300
echo multiply(100.5, 10, "B")."<br>"; // 1000