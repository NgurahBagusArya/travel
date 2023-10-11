<?php
    require 'function.php';
// registrasi
if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script> 
        alert('user baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman regristrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Regristrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="email">email :</label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="no_telp">No Telephone :</label>
                <input type="text" name="no_telp" id="no_telp">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Registrasi</button>
            </li>
        </ul>
    </form>
</body>



</html>