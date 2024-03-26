<?php
/*
قم بإنشاء Function تقوم بجمع كل الأرقام التي تعطى لها ك Arguments
إذا وجدت في الأرقام رقم 5 لا تجمعه مع الأرقام
إذا وجدت في الأرقام رقم 10 غير قيمته إلى 20 وأكمل العملية الحسابية كما هي
شاهد المثال لتفهم الفكرة
*/
function sum_all(...$nums){
    $sum = 0;
    foreach ($nums as $num) {
        if ($num == 5) {
            continue;
        }
        elseif ($num == 10) {
            $num = 20;
        }
        $sum += $num;
    }
    return $sum;
}

echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40