<?php
    function luas_ls($alas, $tinggi) {
        return $alas / $tinggi * 2; 
    }

$a = 20;
$t = 5;
echo "Luas Segitiga dari Alas $a dan Tinggi $t = ";
echo luas_ls($a, $t);
?>