<?php
/* قم بعمل Function تقوم بعمل عمليات حسابية بإسم calculate
العمليات الحسابية هي الجمع والطرح والضرب
ال Function تقبل ثلاثة Parameters الرقم الأول والرقم الثاني ونوع العملية الحسابية وقم بتسميتهم كما تريد
كل ما عليك هو تنفيذ العملية الحسابية بناء على المدخلات
في حالة قام الشخص بكتابة نوع العملية الحسابية خطأ تظهر له رسالة أنه لا توجد هذه العملية
العمليات الحسابية المتاحة هي add, subtract, multiply
يمكن للشخص كتابة أول حرف فقط من العملية الحسابية فمثلا subtract يمكن أن يكتب s
إذا لم يكتب الشخص العملية الحسابية نهائيا قم بعمل العملية الإفتراضية وهي الجمع
*/
function calculate($NUM_1, $NUM_2, $op = "add") {
    if ($op == "add" || $op == "a") {
        return $NUM_1 + $NUM_2;
    }

    elseif ($op == "subtract" || $op == "s") {
        return $NUM_1 - $NUM_2;
    }

    if ($op == "multiply" || $op == "m") {
        return $NUM_1 * $NUM_2;
    }
    else {
        return "Try Again, This Operation is Not Available";
    }
}

echo calculate(10, 20); // 30 an assumed add
echo "<br>";

echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "add"); // 30
echo "<br>";

echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";

echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200