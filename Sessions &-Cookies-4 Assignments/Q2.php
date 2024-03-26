<?php
/*
قم بطباعة محتوى ال Cookies كما في المثال
في السطر التالي قم بطباعة الرسالة كما في المثال مع جلب القيم من ال Cookies
*/

// My output
// Array
// (
//   [site] => Array
//     (
//       [color] => blue
//       [font] => Swat
//       [layout] => boxed
//     )
// )
// "Your Color Is blue And Your Font Is Swat"


//start your code here
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "Your Color Is  {$_COOKIE['site']['color']} And Your Font Is " . $_COOKIE['site']['font'];