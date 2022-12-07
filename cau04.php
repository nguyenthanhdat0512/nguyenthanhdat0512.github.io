<?php
$x1=1; $x2='1';$x3=9%8;//'1' chuoi so 1
$s1=$x1==$x2?'BANG':'KHAC';
$s2=$x1===$x2?'BANG2':'KHAC2';//=== so sanh gia tri va kieu du lieu(x2 khac kieu du lieu)
$s3=$x1===$x3?'BANG3':'KHAC3'; // x1 va x3 cung kieu du lieu va cung gia tri
echo $s1.'<br>'.$s2.'<br>'.$s3;
// chuoi: ' ' hoac " "