<?php
    $uharry = 50000;
    $makanan = 25000;
    $minuman = 10000;
    $sisauharry = $uharry - $makanan - $minuman;
    $spendharry = $makanan + minuman;
    echo "Uang Harry Rp. $uharry";
    echo "<br> Harga makanan Rp. $makanan";
    echo "<br> Harga minuman Rp. $minuman";
    echo "<br> Harry spend uang sebanyak Rp. $spendharry";
    echo "<br>Sisa uang harry Rp. $sisauharry";
    if($sisauharry > 0){
        echo "<h1> Harry orang hemat </h1>";
    }
    else{
        echo "<h1> Harry adalah orang yang boros </h1>";
    }