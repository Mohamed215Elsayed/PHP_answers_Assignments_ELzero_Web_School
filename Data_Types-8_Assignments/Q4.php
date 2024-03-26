<?php
/*
لديك ال Code التالي
يحتوي على
\n
وهي ال Character الخاص بال New Line
ولكن جميع هذه الكلمات سوف تظهر على نفس السطر
قم بالتعديل على السطر لجعل كل كلمة تظهر في سطر منفصلة عند الطباعة
*/
// echo "We \n Love \n Elzero \n Web \n School";
// Needed Output
// We
// Love
// Elzero
// Web
// School


// Solution
echo nl2br(
<<<MO
We
Love
Elzero
Web
School
MO
);


