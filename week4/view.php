<?php
    //memanggil database sql
    $con = new mysqli("localhost", "root", "", "db_surat_dobith");
    //memanggil tabel dari database
    $isi = "SELECT * FROM tbl_surat ORDER BY 'id' ASC";
    //memanggil 
    $result = $con->query($isi);
    // $isi = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Surat</title>
        <link rel="stylesheet" href="assets/css/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <style>
              
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');
            
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            #judul {
                text-align: center;
            }

            body {
            font-family: 'Inter', sans-serif;
            color: #343a40;
            line-height: 1;
            display: flex;
            justify-content: center;
            }

            table {
            width: 800px;
            border-right-color: #ffffff;
            margin-top: 100px;
            font-size: 18px;
            /* /* border: 1px solid #343a40; */
            border-collapse: collapse; 
            }

            th, td {
            /* border: 1px solid #343a40; */
            padding: 16px 24px;
            text-align: left;
            }

            th {
            background-color: #087f5b;
            color: #fff;
            width: 25%;
            }

            tbody tr:nth-child(odd){
            background-color: #f8f9fa;
            }


            tbody tr:nth-child(even){
            background-color: #e9ecef;
            }
            #teng{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div>
    <table>
      <thead>
        <tr>
          <th colspan="8" id="teng">List Surat</th>
        </tr> 
        <tr>
          <th>No Surat</th>
          <th>Jenis Surat</th>
          <th>Tanggal Surat</th>
          <th>TTD Surat</th>
          <th>TTD Mengetahui</th>
          <th>TTD Menyetujui</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <tbody>
    <?php 
        //memanggil semua isi tabel berdasarkan row/baris
        foreach ($result as $isi) {
            if($isi['jenis_surat']=='1'){
                $js = "Surat Keputusan";
            } else if ($isi['jenis_surat']=='2'){
                $js = "Surat Pernyataan";
            } else if ($isi['jenis_surat']=='3'){
                $js = "Surat Peminjaman";
            } else {
                $js = "Kode Bermasalah";
            }
            ?>
            <tr>
                <td><?php echo $isi['no_surat']; ?></td>
                <td><?php echo $js; ?></td>
                <td><?php echo $isi['tgl_surat']; ?></td>
                <td><?php echo $isi['ttd_surat']; ?></td>
                <td><?php echo $isi['ttd_mengetahui']; ?></td>
                <td><?php echo $isi['ttd_menyetujui']; ?></td>
                <td><?php echo "Edit"; ?></td>
                <td><?php echo "Delete"; ?></td>
            </tr>
        <?php
        }
        ?>


      </tbody>      
    </table>
    </div>
    </body>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>