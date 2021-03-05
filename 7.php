<?php
$x = 3 ; $y=$x++;  // x = 3 , y = 3
$y+= ++$x;         // x = 3 , y = 7 
if ($y == 7) {     // x = 3 , y = 7 
$x++;              // x = 4 , y = 7 
echo $x ."<br>";   // x = 4 , y = 7 
}
else if ($y == 8){ // x = 4 , y = 7 
$x--;              // x = 3 , y = 7 
echo $x ."<br>";   // x = 3 , y = 7 
}
else if ($y == 9){ // x = 3 , y = 7 
$x+=2;             // x = 5 , y = 7 
echo $x ."<br>";   // x = 5 , y = 7 
}
else {
$x= 0;             // x = 0 , y = 7 
echo $x ."<br>"; }