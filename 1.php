<?php 
$array1=[];
$array1[0]=215;
$array1[1]=2515;
$array1[2]=-852;
$array1[3]=6596;
$array1[4]=785;
$array1[5]=-2;
$array1[6]=25;
$min=999999999;
$max=-999999999;
for($i=0;$i<sizeof($array1);$i++){
if($array1[$i]>$max){
    $max=$array1[$i];
}elseif($array1[$i]<$min){
$min=$array1[$i];
}
}
echo 'max number is:  ' . $max .'<br>';
echo 'min number is:  ' . $min .'<br>';