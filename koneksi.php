<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_weekend";

    $connect = mysqli_connect($server, $user, $password, $database);

    // check connection
    if(!$connect) {
        die("Database tidak terhubung: ".mysqli_connect_error());
    }


    function registrasi($data)  {

        global $connect;
        
        $username = strtolower(stripslashes($data['username']));
        $password = mysqli_real_escape_string($connect, $data['password']);
        $password2 = mysqli_real_escape_string($connect, $data['password2']);

        // cek username

        $result = mysqli_query($connect, "SELECT username_akun from tb_akun WHERE username_akun='$username'");

        if(mysqli_fetch_assoc($result)) {
            echo "<script>alert('username sudah terdaftar!')</script>";
            return false;
        }

        // cek konfirmasi password
        if($password !== $password2) {
            echo "<Script>alert('konfirmasi password tidak sesuai!')</script>";
            return false;
        }
            
    

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // TAMBAHKAN USERBARU KE DATABASE
        mysqli_query($connect, "INSERT INTO tb_akun VALUES ('', '$username', '$password')");
        return mysqli_affected_rows($connect);

    }

?>