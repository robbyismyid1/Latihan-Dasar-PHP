<?php
    $bulan = date ("M");
    switch ($bulan) {
        case 'Jan' : $month = "Januari"; break;
        case 'Feb' : $month = "Februari"; break;
        case 'Mar' : $month = "Maret"; break;
        case 'Apr' : $month = "April"; break;
        case 'May' : $month = "Mei"; break;
        case 'Jun' : $month = "Juni"; break;
        case 'Jul' : $month = "Juli"; break;
        case 'Aug' : $month = "Agustus"; break;
        case 'Sep' : $month = "September"; break;
        case 'Oct' : $month = "Oktober"; break;
        case 'Nov' : $month = "November"; break;
        case 'Dec' : $month = "Desember"; break;
        default : $month = "Kiamat";
}
    echo "<h1> Sekarang adalah bulan <b>$month</b> </h1>";
?>