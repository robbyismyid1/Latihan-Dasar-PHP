<?php
    $tahun = date("Y");
    $kabisat = ($tahun%4 == 0) ? "KABISAT":"BUKAN KABISAT";
    echo "<h1> Tahun <b>$tahun</b> $kabisat </h1>";
?>