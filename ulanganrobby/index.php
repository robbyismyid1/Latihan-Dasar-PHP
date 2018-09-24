<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="asset/logo-custom.png"/>
    <title>PPDB SMK/SMA Assalaam Bandung</title>
</head>
<body>
<center>
    <table>
        <Form action="php.php" method="POST" name="input">
        <h2 style="color:blue"><center>FORMULIR PPDB SMK/SMA</center></h2>
        <br>
        <br>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" id="" cols="22" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Nama Orang tua &nbsp &nbsp</td>
            <td><input type="text" name="momdad"></td>    
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jk" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><select name="tanggal">
            <?php
                for ($tl=1;$tl<=31;$tl++){
                    echo "<option value=$tl> $tl</option>";
                }
            ?>
                
            </select>
                <select name="bulan">
                <?php
                    for ($bln=1;$bln<=12;$bln++){
                        echo "<option value=$bln> $bln</option>";
                    }
                ?>
            </select>
                <select name="tahun">
                <?php
                    for ($thn=1970;$thn<=2018;$thn++){
                        echo "<option value=$thn> $thn</option>";
                    }
                ?>
                </select>
                </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><select name="agama">
                <option value="Islam"> Islam</option>
                <option value="Kristen Protestan"> Kristen Protestan</option>
                <option value="Katolik"> Katolik</option>
                <option value="Hindu"> Hindu</option>
                <option value="Budha"> Budha</option>
                <option value="Kong Hu Cu"> Kong Hu Cu</option>
                </select>
            </td>   
        </tr>
        <tr>
            <td> Nilai Matematika : </td>
            <td><input type="number" name="a"></td>
        </tr>
        <tr>
            <td> Nilai Bahasa Indonesia : </td>
            <td><input type="number" name="b"></td>
        </tr>
        <tr>
            <td> Nilai Bahasa Inggris : </td>
            <td><input type="number" name="c"></td>
        </tr>
        <tr>
            <td> Nilai IPA : </td>
            <td><input type="number" name="d"></td>
        </tr>
        <tr>
            <td><td><input type="submit" name="Kirim" value="Send Data"></td></td>
        </tr>
        </Form>
    </table>
    </center>
</body>
</html>