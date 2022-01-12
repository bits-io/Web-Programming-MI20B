<?php
    error_reporting(1);
    //memanggil database sql
    $con = new mysqli("localhost", "root", "", "db_vaksin_dobith");
    //memanggil tabel dari database
        $isi = "SELECT * FROM tbl_vaksin";
        //memanggil 
        $result = $con->query($isi);
        // $isi = $result->fetch_assoc();
    $query = mysqli_query($con, "SELECT * FROM tbl_vaksin");
    $isi = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Vaksinasi</title>
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
            width: 1000px;
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
            
        <?php
            $pesan = $_GET['pesan'];
            $frm = $_GET['frm'];
            // echo $pesan;
            if ($pesan == 'success' && $frm=='add'){
        ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Menambahkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
            } else if ($pesan == 'success' && $frm=='edit'){
        ?>
        
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Mengedit.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php
            } else if ($pesan == 'success' && $frm=='delete'){
        ?>
        
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Menghapus.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php
           } else if ($pesan == 'success' && $frm=='failed'){
        ?>
            <strong>Berhasil!</strong> Selamat Anda Berhasil Menghapus.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php
           } 
        ?>


        

    <table>
      <thead>
        <tr>
          <th colspan="9"><a class="btn btn-light" href="add.php">Add</a></th>
        </tr> 
        <tr>
          <th colspan="9" id="teng">List Vaksinisasi</th>
        </tr> 
        <tr>
          <th>NIK</th>
          <th>Nama Lengkap</th>
          <th>Tanggal Lahir</th>
          <th>No HP</th>
          <th>Puskesmas</th>
          <th>Alamat</th>
          <th>Status Vaksin</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <tbody>
      <?php 
        //memanggil semua isi tabel berdasarkan row/baris
        foreach ($result as $isi) {
            if($isi['puskesmas']=='1'){$ps = "KECAMATAN CIAMIS";}
            else if($isi['puskesmas']=='2'){$ps = "KECAMATAN CIJEUNGJING";}
            else if($isi['puskesmas']=='3'){$ps = "KECAMATAN CIKONENG";}
            else if($isi['puskesmas']=='4'){$ps = "KECAMATAN CISAGA";}
            else if($isi['puskesmas']=='5'){$ps = "KECAMATAN SINDANGKASIH";}
            else if($isi['puskesmas']=='6'){$ps = "KECAMATAN CIMARAGAS";}
            else if($isi['puskesmas']=='7'){$ps = "KECAMATAN BAREGBEG";}
            else if($isi['puskesmas']=='8'){$ps = "KECAMATAN CIPAKU";}
            else if($isi['puskesmas']=='9'){$ps = "KECAMATAN CIDOLOG";}
            else if($isi['puskesmas']=='10'){$ps = "KECAMATAN SADANANYA";}
            else if($isi['puskesmas']=='11'){$ps = "KECAMATAN CIHAURBEUTI";}
            else if($isi['puskesmas']=='12'){$ps = "KECAMATAN KAWALI";}
            else if($isi['puskesmas']=='13'){$ps = "KECAMATAN JATINAGARA";}
            else if($isi['puskesmas']=='14'){$ps = "KECAMATAN PANUMBANGAN";}
            else if($isi['puskesmas']=='15'){$ps = "KECAMATAN PAMARICAN";}
            else if($isi['puskesmas']=='16'){$ps = "KECAMATAN RANCAH";}
            else if($isi['puskesmas']=='17'){$ps = "KECAMATAN SUKADANA";}
            else if($isi['puskesmas']=='18'){$ps = "KECAMATAN PANJALU";}
            else if($isi['puskesmas']=='19'){$ps = "KECAMATAN RAJADESA";}
            else if($isi['puskesmas']=='20'){$ps = "KECAMATAN LAKBOK";}
            else if($isi['puskesmas']=='21'){$ps = "KECAMATAN PANAWANGAN";}
            else if($isi['puskesmas']=='22'){$ps = "KECAMATAN BANJARSARI";}
            else if($isi['puskesmas']=='23'){$ps = "KECAMATAN SUKAMANTRI";}
            else if($isi['puskesmas']=='24'){$ps = "KECAMATAN LUMBUNG";}
            else if($isi['puskesmas']=='25'){$ps = "KECAMATAN TAMBAKSARI";}
            else if($isi['puskesmas']=='26'){$ps = "KECAMATAN PURWADADI";}
            else {echo "KODE PUSKESMAS BERMASALAH";}

            if($isi['status_vaksin']=='1'){$st = "BELUM";}
            else if($isi['status_vaksin']=='2'){$st = "SUDAH";}
            else {echo "KODE STATUS VAKSIN BERMASALAH";}
            ?>
            <tr>   
                <td><?php echo $isi['nik']; ?></td>
                <td><?php echo $isi['nama_lengkap']; ?></td>
                <td><?php echo $isi['tanggal_lahir']; ?></td>
                <td><?php echo $isi['no_hp']; ?></td>
                <td><?php echo $ps; ?></td>
                <td><?php echo $isi['alamat']; ?></td>
                <td><?php echo $st; ?></td>
                <td><a href="edit.php?id_vaksin=<?php echo $isi['id_vaksin']; ?>"><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></a></td>
                <td><a href="#" data-bs-toggle="modal" data-bs-target="#deletevaksin<?php echo $isi['id_vaksin']; ?>" ><button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button></a></td>
            </tr>
            <div class="example-modal">
                <div id="deletevaksin<?php echo $isi['id_vaksin']; ?>" class="modal fade" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="row g-3" method="post" action="delete.php" name="form1">
                                <div class="modal-header">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center">Konfirmasi Delete Data Vaksinasi</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <input type="hidden" class="form-control" name="id_vaksin" id="id_vaksin" value="<?php echo $isi['id_vaksin']; ?>">
                                    <h5 class="text-center">Apakah Anda yakin ingin menghapus NIK <?php echo $isi['nik']; ?><strong><span class="grt"></span></strong>?</h5>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button id="nodelete" type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="delete" id="delete">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        $sql = "DELETE FROM tbl_vaksin WHERE id='id_vaksin'";
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