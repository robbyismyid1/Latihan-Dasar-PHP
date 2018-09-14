<?php
    if (isset($_POST['send'])) {
        $nama = ($_POST['nama']);
        $nis = ($_POST['nis']);
        $alamat = ($_POST['alamat']);
        $jk = ($_POST['jk']);
        $agama = ($_POST['agama']);
        $sekolah = ($_POST['sekolah']);
        $email = ($_POST['email']);
        $nem = ($_POST['nem']);
        $ortu = ($_POST['ortu']);
        echo "<h2> Nama : <font color=red><b>$nama</b></font><br></h2>";
        echo "<h2> Nomor Induk Siswa : <font color=red><b>$nis</b></font><br></h2>";
        echo "<h2> Alamat : <font color=red><b>$alamat</b></font><br></h2>";
        echo "<h2> Jenis Kelamin : <font color=red><b>$jk</b></font><br></h2>";
        echo "<h2> Agama : <font color=red><b>$agama</b></font><br></h2>";
        echo "<h2> Asal Sekolah : <font color=red><b>$sekolah</b></font><br></h2>";
        echo "<h2> Nama Orang Tua : <font color=red><b>$ortu</b></font><br></h2>";
        echo "<h2> Mata Pelajaran yang disukai : <br></h2>";
        $mapel1 = ($_POST['mapel01']);
        $mapel2 = ($_POST['mapel02']);
        $mapel3 = ($_POST['mapel03']);
        $mapel4 = ($_POST['mapel04']);
        $mapel5 = ($_POST['mapel05']);
        if ($mapel1) {
            echo "<h2> &nbsp || &nbsp <font color=red><b>$mapel1</b></font></h2><br>";
        }
        if ($mapel2) {
            echo "<h2>&nbsp || &nbsp <font color=red><b>$mapel2</b></font></h2><br>";
        } 
        if ($mapel3) {
            echo "<h2>&nbsp || &nbsp <font color=red><b>$mapel3</b></font></h2><br>";
        }
        if ($mapel4) {
            echo "<h2>&nbsp || &nbsp <font color=red><b>$mapel4</b></font></h2><br>";
        }
        if ($mapel5) {
            echo "<h2>&nbsp || &nbsp <font color=red><b>$mapel5</b></font></h2><br>";
        }
        echo "<h2> Email : <font color=red><b>$email</b></font><br></h2>";
        echo "<h2> Mata Pelajaran yang disukai : <br>";
        echo "<br> NEM : <font color=red><b>$nem</b></font><br>";
        if ($nem > 23) {
            echo "<br>Status : <font color=red><b>Anda Diterima</b></font><br>";
        }
        else {
            echo "<br>Status : <font color=red><b>Nilai Anda Kurang, Anda Tidak Diterima</b></font><br>";
        }
    }
    ?>