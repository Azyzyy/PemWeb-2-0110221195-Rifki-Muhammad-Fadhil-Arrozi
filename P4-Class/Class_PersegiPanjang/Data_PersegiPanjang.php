<?php

    require_once("class_PersegiPanjang.php");

    $luas = new Luas();
    $keliling = new Keliling();
    
   #hitung  Luas Persegi Panjang
     $p = 7;
     $l = 6;
     echo "Hasil Menghitung Luas Dan Keliling <br>";
     echo "Luas : ";
     echo $luas->persegi_panjang($p,$l);
     echo "<br> Keliling :";
     echo $keliling->persegi_panjang1($p,$l);

    #output 20

?>