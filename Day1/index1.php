<?php
$x='G';
$y='C';
$z='V';
for($n=1; $n<=9; $n++)
    {
         $a=$y; //=>C
         $y=$z; // V
         $z=$a; //C
         $b=$x; //=>G
         $x=$y; // V
         $y=$b; // G
        
        echo $n;
      
    }
    echo 'Ardicilliq:'.$x.$y.$z;
   







// ?>



