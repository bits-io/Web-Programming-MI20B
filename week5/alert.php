<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            $pesan = $_GET['pesan'];
            // echo $pesan;
            if ($pesan == 'success'){
        ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Selamat Anda Berhasil Menambahkan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

        <?php
            }
        ?>

        <?php
            if ($pesan == 'edit'){
        ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Selamat Anda Berhasil Mengedit.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

        <?php
            }
        ?>

        <?php
            if ($pesan == 'delete'){
        ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Selamat Anda Berhasil Menghapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

        <?php
            }
        ?>
</body>
</html>