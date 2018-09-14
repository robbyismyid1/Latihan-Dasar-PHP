<?php
    $gaji = 1000000;
    $pajak = 0.10;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji Kotor = Rp. $gaji <br>";
    echo "Gaji Bersih = Rp. $thp";
?>