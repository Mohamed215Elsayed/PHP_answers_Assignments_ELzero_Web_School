<?php
/*قم بحساب مساحة أي ملف فيديو عندك في جهازك
في السطر الأول قم بطباعة المساحة بالميجا بايت
في السطر الثاني قم بطباعة المساحة بالكيلو بايت
دع ال Script يحسب الملف في مكانه بدون نقله إلى أي مكان آخر
*/
// Output as an example
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"
$MyVideos = glob("D:\مطـــــــربات\اليسا\Elissa.Saharna.Ya.Lail.2016.ArbCinema.CoM -\*.*");
foreach ($MyVideos as $Video) {
    echo "Size In Megabyte Is ". round((filesize($Video) / 1024 / 1024),2) . " <br>";
    echo  "Size In Kilobyte Is ".round((filesize($Video) / 1024),2) . " KB<br>";
    echo "******************<br>";
}
// //my output
// Size In Megabyte Is 9.88
// Size In Kilobyte Is 10119.38 KB
// ******************
// Size In Megabyte Is 10.63
// Size In Kilobyte Is 10887.04 KB
// ******************
// Size In Megabyte Is 10.19
// Size In Kilobyte Is 10435.32 KB
// ******************
// Size In Megabyte Is 10.82
// Size In Kilobyte Is 11079.38 KB
// ******************
// Size In Megabyte Is 11.62
// Size In Kilobyte Is 11895.95 KB
// ******************
// Size In Megabyte Is 11.36
// Size In Kilobyte Is 11633.98 KB
// ******************
// Size In Megabyte Is 11.03
// Size In Kilobyte Is 11293.17 KB
// ******************
// Size In Megabyte Is 8.17
// Size In Kilobyte Is 8361.53 KB
// ******************
// Size In Megabyte Is 11.92
// Size In Kilobyte Is 12207.45 KB
// ******************
// Size In Megabyte Is 7.58
// Size In Kilobyte Is 7765.32 KB
// ******************
// Size In Megabyte Is 11.06
// Size In Kilobyte Is 11322.76 KB
// ******************
// Size In Megabyte Is 11.64
// Size In Kilobyte Is 11917.66 KB
// ******************
// Size In Megabyte Is 8.23
// Size In Kilobyte Is 8429.07 KB
// ******************
// Size In Megabyte Is 12.27
// Size In Kilobyte Is 12563.57 KB
// ******************
// Size In Megabyte Is 9.48
// Size In Kilobyte Is 9704.39 KB
// ******************
// Size In Megabyte Is 10.37
// Size In Kilobyte Is 10617.2 KB
// ******************