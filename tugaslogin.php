<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
    Email : <input type="text" name="email"><br>
    Password : <input type="password" name="pass"><br>
    <input type="submit" name="Input" value="Login">
    </FORM>
</body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $a = $_POST['email'];
        $b = $_POST['pass'];
        if ($a=="admin@gmail.com" && $b=="123456") {
            echo "Login berhasil";
            header("Location: https://www.shafou.com");
        }
        else{
            echo "Login Gagal, anda tidak memiliki akun";
        }
        }
        ?>