<?php
$result=0;
for($i=0;$i<=12;$i++){
    for($j=0;$j<=12;$j++){
        $result=$i*$j;
        echo ' | '.$i .'*'. $j .'='. $result.' | ';
    }
    echo '<br>';
}