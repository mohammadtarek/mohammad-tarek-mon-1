<?php
$array1=[];
$array1[0]=2;
$array1[1]=2;
$array1[2]=5;
$array1[3]=6596;
$array1[4]=785;
$array1[5]=-2;
$array1[6]=25;
for($i=0;$i<sizeof($array1);$i++){
    for($j=0;$j<sizeof($array1);$j++){
        if($i==$j){
            continue;
        }
        else{
    if($array1[$i]==$array1[$j]){
        $array1[$i]=null;
    }
}
    }
}
for($i=0;$i<sizeof($array1);$i++){
    echo $array1[$i].'<br>';
}