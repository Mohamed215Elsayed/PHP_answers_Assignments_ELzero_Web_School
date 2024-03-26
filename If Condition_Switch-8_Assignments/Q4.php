<?php
/* --------------------------------لديك مجموعة من الشروط ونريد إختصارها عن طريق ال Ternary Operator
المطلوب أن تكون في سطر واحد فقط مختصر
*/
$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {
    echo "A + B = C";
}
elseif ($a + $c === $b) {
    echo "A + C = B";
}
elseif ($b + $c === $a) {
    echo "B + C = A";
}
else {
    echo "The End";
}
// Output
// "B + C = A"

// Ternary Operator
echo
($a + $b === $c) ? "A + B = C"
: (($a + $c === $b) ? "A + C = B"
: ($b + $c === $a ? "B + C = A" : "The End"));
