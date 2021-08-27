<?php

function random($panjang)

{

   $pengacak = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

   $string = '';

   for($i = 0; $i < $panjang; $i++) {

   $pos = rand(0, strlen($pengacak)-1);

   $string .= $pengacak{$pos};

   }

    return $string;

}



//Contoh Pemanggilan

 $hasil = random(10);

?>

