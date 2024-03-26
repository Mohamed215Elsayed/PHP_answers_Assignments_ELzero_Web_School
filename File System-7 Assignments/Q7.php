<?php
/*
// MO.txt Content
Hello MO Web
School

// MO.txt New Content
Hello X Web
School
*/
$data =  file_get_contents("MO.txt");//Hello MO Web School

$data = str_replace("MO", "X", $data);
file_put_contents("MO.txt", $data);//modify
echo "<hr>";
echo file_get_contents("MO.txt");