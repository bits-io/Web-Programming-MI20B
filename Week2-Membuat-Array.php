<?php
    $mybio1=array("202002074","M Dobith Syadad Riyadi","Ciamis", "089621671126", "Manajemen Informatika");
    $matkul=array("Web Programming 1", "System Design Analyst", "Mobile Programming");
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Week 2 - Dobith</title>
  </head>
  <body>
  
  <?php
    echo "<center>BIODATA</center>";
    echo "<br><br>";
    // Menggunakan index angka
    
    echo "NIM :". $mybio1[0];
    echo "<br>";
    echo "Nama :". $mybio1[1];
    echo "<br>";
    echo "Alamat :". $mybio1[2];
    echo "<br>";
    echo "No HP :". $mybio1[3];
    echo "<br>";
    echo "Jurusan :". $mybio1[4];
    echo "<br>";

    echo "Saya mengambil mata kuliah sebagai berikut:";
    echo "<br>";
    
    for ($x = 0; $x < count($matkul); $x++){
        echo $x+1 ." " .$matkul[$x]."<br>";
    }
  ?>

  </body>
</html>
