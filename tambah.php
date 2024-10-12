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
            <h3>tambah data</h3>
            <form action="tambah-proses.php" method="post">
                <!-- input nama -->
                 <div class="mb-3">
                    <label for="inputnama" class="form-label">nama</label>
                    <input type="text" class="form-control" id="inputnama" name="inputnama" placeholder="masukan nama lengkap...">
                 </div>
                      <!-- input jurusan -->
                      <div class="mb-3">
                    <label for="inputjurusan" class="form-label">jurusan</label>
                    <input type="text" class="form-control" id="inputjurusan" name="inputjurusan" placeholder="masukan jurusan lengkap...">
                 </div>
                      <!-- input kampus -->
                      <div class="mb-3">
                    <label for="inputkampus" class="form-label">kampus</label>
                    <input type="text" class="form-control" id="inputkampus" name="inputkampus" placeholder="masukan nama kampus...">
                 </div>
                 <button type="submit" class="btn btn-primary">tambah</button>
            </form>
            

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>