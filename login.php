<?php
    include "koneksi.php";

    session_start();

    if(isset($_POST["login"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($connect, "SELECT * FROM tb_akun WHERE username_akun = '$username'");

        // cek akun
        if(mysqli_num_rows($result) === 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password_akun'])) {
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit;
            }
            $error = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet" >
</head>
<body>
<!doctype html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


 


    <title>Login Form</title>
    <body>
    <form action="" metchod="post">
        <div class="login-box">
            <div class="login-header">
                <header>login </header>
            </div>
           
            <div class="input-box">
                
                <input type="text" class="input-field" placeholder="email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="password" autocomplete="off" required>
            </div>
            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">remember me</label>
                </section>
                <section>
                    <a href="">forgot password</a>
                </section>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit"></button>
                <label for="submit">sign in</label>
            </div>
            <div class="sign-up-link">
                <p>dont have account? <a href="register.php">sign up</a></p>
            </div>
            </form>

      
        </div>

        <?php
        if(isset($error)) {
            echo "<p style='color: red; font-style: italic'>username / password salah</p>";

        }







    

  
    ?>
    <div class="card">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>