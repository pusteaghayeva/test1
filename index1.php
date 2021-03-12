<?php

// Milad gecəsi pəncərənin qarşısında soldan sağa olmaqla üç gül: ətirşah, krokus və bənövşə düzülmüşdür. 
// Maşa hər səhər pəncərəni silir və sağda dayanan güllə ortadakı gülün yerini dəyişdirirdi. 
// Tanya isə axşamlar gülləri sulayır və soldakı və ortadakı güllərin yerini dəyişdirirdi. 
// k-cı günün gecəsində güllərin düzülmə ardıcıllığını müəyyənləşdirmək tələb olunur.

$x='G'; //ətirşah
$y='C'; //krokus
$z='V'; //bənövşə
for($n=1; $n<=9; $n++)
    {
         $a=$y; //=>C
         $y=$z; //=>V
         $z=$a; //=>C
         $b=$x; //=>G
         $x=$y; //=>V
         $y=$b; //=>G
        
        // echo $n;
      
    }
    echo 'Ardıcıllıq: '.$x.$y.$z."<br>";


// ?>



