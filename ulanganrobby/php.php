<?php
    if (isset($_POST['Kirim'])) {
        $tglnow = mktime(date('d'), date("m"), date('Y'));
        $jam = date ("H:i:s");
        $nama = ($_POST['nama']);
        $alamat = ($_POST['alamat']);
        $jk = ($_POST['jk']);
        $agama = ($_POST['agama']);
        $ortu = ($_POST['momdad']);
        $a = ($_POST['a']);
        $b = ($_POST['b']);
        $c = ($_POST['c']);
        $d = ($_POST['d']);
        $hasil = $a + $b + $c + $d;
        $tanggal = ($_POST['tanggal']);
        $bulan = ($_POST['bulan']);
        $tahun = ($_POST['tahun']);
        $birthday = "$tanggal-$bulan-$tahun";
        $biday = new DateTime($birthday);
        $today = new DateTime();
        $diff = $today->diff($biday);
        echo "<h2> Nama : <b>$nama</b><br></h2>";
        echo "<h2> Alamat : <b>$alamat</b><br></h2>";
        echo "<h2> Nama Orang Tua : <b>$ortu</b><br></h2>";
        echo "<h2> Jenis Kelamin : <b>$jk</b><br></h2>";
	    echo "<h2> Umur: ". $diff->y ." Tahun </h2> ";
        echo "<h2> Agama : <b>$agama</b><br></h2>";
        echo "<h2> Matematika : $a </h2>";
        echo "<h2> Bahasa Indonesia : $b </h2>";
        echo "<h2> Bahasa Inggris : $c </h2>";
        echo "<h2> Ilmu Pengetahuan Alam : $d </h2>";
        echo "<h2> Nilai Total : $hasil </h2><br>";
        if ($hasil >= 30.40) {
            echo " <b>Anda Diterima</b><br>";
        }
        else {
            echo " <b>Nilai Anda Kurang, Anda Tidak Diterima</b><br>";
        }
        echo "<br>";
        echo "Tanggal : <b> " . date("d-m-Y", $tglnow ) . "</b>";
        date_default_timezone_set("Asia/Jakarta");
        echo " | Pukul : <b> " . $jam . " " ." </b> ";
    }
    ?>