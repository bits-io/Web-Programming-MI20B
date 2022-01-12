<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas Week 1 - Dobith</title>
  </head>
  <body>
  
  <?php
    echo "BIODATA";
    echo "<br><br>";
    // Menggunakan index angka
    $mybio1=array("202002074","M Dobith Syadad Riyadi","MI20B", "Membaca Buku, Naik Gunung dan Touring", "Manajemen Informatika");
    echo "NIM :". $mybio1[0];
    echo "<br>";
    echo "Nama :". $mybio1[1];
    echo "<br>";
    echo "Kelas :". $mybio1[2];
    echo "<br>";
    echo "Hobby :". $mybio1[3];
    echo "<br>";
    echo "Jurusan :". $mybio1[4];
    echo "<br>";


    // Menggunakan index huruf
    $mybio2=array(
      'matkul1' => "Web Programming",
      'matkul2' => "System Design Analyst",
      'matkul3' => "Mobile Programming");
    
    echo "Mata Kuliah 1: " .$mybio2['matkul1'];
    echo "<br>";
    echo "Mata Kuliah 2: " .$mybio2['matkul2'];
    echo "<br>";
    echo "Mata Kuliah 3: " .$mybio2['matkul3'];
  ?>

  </body>
</html>
