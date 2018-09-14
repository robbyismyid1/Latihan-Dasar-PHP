<?php
$nim = "081818181";
$nama = "Robby Sugara Saputra";
$umur = 17;
$nilai = 98.50;
$status = true;
echo "NIM : " .$nim ."<br>";
echo "Nama : " .$nama ."<br>";
print "Umur : " .$umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status) {
    echo "Status : Aktif";

}else {
    echo "Status : Tidak Aktif";
}