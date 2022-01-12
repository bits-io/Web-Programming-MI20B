<?php
include '../controller/Vaksin.php';
$ctrl = new Vaksin();
$vaksin = $ctrl->index();
$no = 1;

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
//else {echo "KODE PUSKESMAS BERMASALAH";}

if($isi['status_vaksin']=='1'){$st = "BELUM";}
else if($isi['status_vaksin']=='2'){$st = "SUDAH";}
//else {echo "KODE STATUS VAKSIN BERMASALAH";}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uts Data Sekolah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body onload="window.print()">
<!-- onload="window.print()" -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-header bg-white text-center">
                        <h3><strong>Data Vaksin Kabupaten Ciamis</strong></h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Lahir</th>
                                        <th>No HP</th>
                                        <th>Puskesmas</th>
                                        <th>Alamat</th>
                                        <th>Status Vaksin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vaksin as $isi) {
                                        
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
                                        //else {echo "KODE PUSKESMAS BERMASALAH";}

                                        if($isi['status_vaksin']=='1'){$st = "BELUM";}
                                        else if($isi['status_vaksin']=='2'){$st = "SUDAH";}
                                        //else {echo "KODE STATUS VAKSIN BERMASALAH";}
                                    
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?php echo $isi['nik']; ?></td>
                                            <td><?php echo $isi['nama_lengkap']; ?></td>
                                            <td><?php echo $isi['tanggal_lahir']; ?></td>
                                            <td><?php echo $isi['no_hp']; ?></td>
                                            <td><?php echo $ps; ?></td>
                                            <td><?php echo $isi['alamat']; ?></td>
                                            <td><?php echo $st; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>