<?php
$count=1;
for($i=0;$i<5;$i++){
    for($j=0;$j<$count;$j++){ 
        echo'*'.' ';
    }
    echo '<br>';
    $count++;
}

$count=5;
for($i=5;$i>0;$i--){
    for($j=0;$j<$count;$j++){ 
        echo'*'.' ';
    }
    echo '<br>';
    $count--;
}