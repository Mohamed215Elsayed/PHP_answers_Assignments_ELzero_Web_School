<?php
/*
قم بإزالة ال Cookie الخاصة بال Layout من ال Cookies السابقة ليتبقى لديك ال Font وال Color فقط
*/
setcookie("site[layout]", "", time() - 1);
