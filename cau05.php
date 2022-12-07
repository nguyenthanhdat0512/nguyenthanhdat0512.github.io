<?php
$s1= 5; $s2= 10; 
$s3=$s1+ $s2;//15
$s4='Tổng $s1 + $s2 =$s3';// Tổng $s1 + $s2 =$s3(' ') 
$s5 ="Tổng $s1 + $s2 =$s3";// Tổng 5 + 10 =15(" ") noi dung s1 s2 s3 duoc dua vao dung vi tri
$s6=<<<qwerty
Tổng $s1 + $s2 = $s3

qwerty;//
$arr = array("x1"=>4,"x2"=>6);
print_r($arr);// Array ( [x1] => 4 [x2] => 6 )
var_dump($arr);
//C:\wamp64\www\20220921\cau05.php:12:
//array (size=2)
//'x1' => int 4
//'x2' => int 6
$s7= "arr['x1'] là {$arr['x1']} ";
echo " $s4 <br> $s5 <br>$s6 <br> $s7 
";

?>
