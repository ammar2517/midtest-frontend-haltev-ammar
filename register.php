<?php
    include "koneksi.php";

    if(isset($_POST["register"]))  {
        if(registrasi($_POST) > 0)  {
            echo "<script>alert('user baru berhasil ditambahkan!')</script>";
        } else {
            echo mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <div class="reg">
    <form action="" metchod="post">
    <div class="register-box">
        <div class="register-header">
            <title>register form</title>

            
            <div class="input-box">
                <input type="text" class="input-field" placeholder="username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="password" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="confirm password" autocomplete="off" required>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit"></button>
                <label for="submit">register</label>
            </div>
        </div>

            </Form>
    </div>
    </div>

</body>
</html>