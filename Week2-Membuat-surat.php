<?php
    $tgl = date("d - M - y");
    $kota = "Tasikmalaya";
    $nosurat = "12/LP3I/IX/2021";
    $instansi = array("LP3I", "Kota Tasikmalaya", "(0265) 311766");
    $barang = array("Keyboard", "Komputer", "Mouse", "Projector", "Kamera");
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Week 2 - Surat Peminjaman</title>
  </head>
  <style>
    .container{
        width: 800px;
        border: 1px solid #000;
        margin: auto;
        padding: 10px;
    }
</style>
  <body>
  <div class="container">
  <?php
    echo "<center><b>ORGANISASI TEKNOLOGI INFORMASI(OTI)</b></center>";
    echo "<center><b>POLITEKNIK LP3I KAMPUS TASIKMALAYA</b></center>";
    echo "<center>Jalan Ir. H. Juanda KM. 2 No. 106</center>";
    echo "<center>Panglayungan, Kec. Cipedes, Tasikmalaya, Jawa Barat 46151</center>";
    echo "<br><br>";
   
    echo $kota .", ".$tgl;
    echo "<br>";
    echo "Nomor : " .$nosurat;
    echo "<br>";
    echo "Perihal : Peminjaman Barang";
    echo "<br>";
    echo "Kepada : <br>";
    for ($i=0; $i < count($instansi); $i++){
        echo $instansi[$i] ."<br>";
    }
    echo "<br>";
    echo "Dengan hormat,";
    echo "<br>";
    echo "Sesuai berdasarkan dari program kerja OTI, akan diselenggarakan acara Seminar Industri 4.0.";
    echo "<br>";
    echo "Berikut ini rincian dari barang-barang yang kami butuhkan untuk berlangsungnya acara , sebagai berikut:";
    echo "<br>";
    for ($i=0; $i < count($barang); $i++){
        echo $i+1 .". " .$barang[$i] ."<br>";
    }

    echo "<br><br>";
    echo $kota .", ".$tgl;
    echo "<br><br>";
    echo "M Dobith Syadad Riyadi";

  ?>
  </div>
  </body>
  <!-- dobith -->
</html>
