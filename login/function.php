<?php

$conn = mysqli_connect("localhost", "root", "", "travel");

if (!$conn) {
    die('connect failed' . mysqli_connect_error());
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $no_telp = strtolower(stripslashes($data["no_telp"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // MENGECEK APAKAH PASSWORD SUDAH SAMA ATAU TIDAK
    if( $password !== $password2  ){
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    query("INSERT INTO ");
    
    return mysqli_affected_rows($conn);

   
}

?>
