<?php
/*
لديك ال Array التالية
المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب
*/

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

$chunkedFriends = array_chunk(array_change_key_case($friends, CASE_LOWER), 2, true);

echo "<pre>";
print_r($chunkedFriends);
echo "</pre>";
/*********************** */
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )