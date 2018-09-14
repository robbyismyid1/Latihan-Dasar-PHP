<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Raport Sederhana</title>
</head>
<body. >
    <table>
        <Form action="tugas8sepphp.php" method="POST" name="input">
        <h2 style="color:red"><center> Sistem Raport Sederhana </center></h2>
        <tr>
            <td><p>Nama </p></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td><p>NIS </p></td>
            <td><input type="number" name="nis"></td>
        </tr>
        <tr>
            <td><p>Alamat </p></td>
            <td><textarea name="alamat" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td><p>Jenis Kelamin </p></td>
            <td>
                <input type="radio" name="jk" value="Laki-Laki" checked> Pria
                <input type="radio" name="jk" value="Perempuan"> Wanita
            </td>
        </tr>
        <tr>
            <td><p>Agama</p></td>
            <td>
                <select name="agama">
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
            <td><p>Asal Sekolah</p></td>
            <td><input type="text" name="sekolah"></td>
        </tr>
        <tr>
            <td><p>Nama Orang Tua</p></td>
            <td><input type="text" name="ortu"></td>
        </tr>
        <tr>
            <td><p>Mata Pelajaran Yang Disukai</p></td>
            <td>
                <input type="checkbox" name="mapel01" value="Bahasa Indonesia" checked> Bahasa Indonesia
                <input type="checkbox" name="mapel02" value="Bahasa Inggris"> Bahasa Inggris
                <input type="checkbox" name="mapel03" value="Matematika"> Matematika
                <input type="checkbox" name="mapel04" value="IPA"> IPA
                <input type="checkbox" name="mapel05" value="Produktif"> Produktif
            </td>
        </tr>
        <tr>
            <td><p>Email</p></td>
            <td><input type="email" name:"email"></td>
        </tr> 
        <tr>      
            <td><p>Masukan Nilai Ijasah SD</p></td>
            <td><input type="number" name:"nem"></td>
        </tr>
        <tr>
            <td><td><input type="submit" name="send" value="Send Data"></td></td>
        </tr>
    </Form>
</table>
    
</body>
</html>