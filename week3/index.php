<?php
error_reporting(0);
 
//DATABASE PERTAMA
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$database = 'db_surat_dobith';
 
// Buat Koneksinya
$db1 = new mysqli($db_host, $db_user, $db_pass, $database);
 
// // Cek koneksi *BISA SOBAT HAPUS NANTINYA 
// if ($db1->connect_error) { 
// 	die("<b>Yahh! Koneksi Database pertama 'db_surat_dobith' gagal</b> : " . mysqli_connect_error()); 
// } else { 
// 	echo "<b>Hore! Koneksi Database pertama 'db_surat_dobith' Berhasil</b>"; 
// }

?>
<!DOCTYPE html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Suratku</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

        

        <!-- Bootstrap core CSS -->
        <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">


        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

    
    </head>
    <body>
        <?php
            echo '<header>';
            echo '<div class="navbar navbar-dark bg-dark shadow-sm">';
            echo '<div class="container">';
            echo '<a href="#" class="navbar-brand d-flex align-items-center">';
            echo '<strong>Surat</strong>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</header>';
            echo '<section class="py-5 text-center container">';
            echo '<div class="row py-lg-5">';
            echo '<div class="col-lg-6 col-md-8 mx-auto">';
            echo '<h1 class="fw-light">Surat menyurat menggunakan PHP</h1>';
            echo '<p class="lead text-muted">Website ini untuk memenuhi tugas Web Programming, yaitu membuat surat menggunakan PHP dengan database phpmyadmin.</p>';
            echo '<p>';
            echo '<a href="https://github.com/bits-io/Web-Programming-MI20B/blob/main/week3/suratkeputusan.php" class="btn btn-primary my-2">Surat Keputusan</a>';
            echo ' ';
            echo '<a href="#" class="btn btn-secondary my-2">Surat Peminjaman</a>';
            echo ' ';
            echo '<a href="#" class="btn btn-success my-2">Surat Pernyataan</a>';
            echo '</p>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        ?>
    </body>
</html>
