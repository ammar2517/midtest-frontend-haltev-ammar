<?php 

    session_start();
    if(!isset($_SESSION['username'])) {
        header("location: login.php");
        exit;
    }
    
    include "koneksi.php";
    $query = "SELECT * FROM tb_mahasiswa";
    $data = mysqli_query($connect, $query);
    
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex">
        <!-- SIDE BAR -->
        <?php
            include "sidebar.html";
        ?>
        <!-- MAIN CONTENT -->
        <div class="container flex-grow-1 p-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kampus</th>
                        <th colspan="2">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $nomer = 1;
                        while ($value = mysqli_fetch_assoc($data)) {
                    ?>

                    <tr>
                        <td><?= $nomer++ ?></td>
                        <td><?= $value["nama_mhs"] ?></td>
                        <td><?= $value["jurusan_mhs"] ?></td>
                        <td><?= $value["kampus_mhs"] ?></td>
                        <td><a href="edit.php?id=<?php echo $value["id_mhs"]; ?>"class="btn btn-primary">edit</a></td>
                        <td><a href="hapus.php?id=<?php echo $value["id_mhs"]; ?>" onclick="return konfirmasi()" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>

                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <script>
        function konfirmasi() {
            return confirm ("apakah anda yakin menghapus data?")
        }
    </script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>