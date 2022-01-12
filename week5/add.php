<?php
    error_reporting(0);
    //memanggil database sql
    $con = new mysqli("localhost", "root", "", "db_surat_dobith");
    //memanggil 
    $query = mysqli_query($con, "SELECT * FROM tbl_jenis_surat");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Surat</title>
        <!-- <link rel="stylesheet" href="assets/css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <body>
            <div class="container">
                <row>
                    <div class="card">
                    <h2 class="text-center">Tambah Surat</h2>
                    <div class="card-body">
                        <form class="row g-3" method="post" action="add.php" name="form1">
                        <div class="col-md-6">
                            <label for="no_surat" class="form-label">No Surat</label>
                            <input type="text" class="form-control" name="no_surat" id="no_surat">
                        </div>
                        <div class="col-md-6">
                            <label for="jenis_surat" class="form-label">Jenis Surat</label>
                            <select class="form-select" id="jenis_surat" name="jenis_surat">
                            <option selected>Pilih Jenis Surat...</option>
                                <?php
                                    foreach ($query as $js){
                                ?>
                            <option value="<?=$js['id_js']?>"><?=$js['jenis_surat']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="tgl_surat" class="form-label">Tanggal Surat</label>
                            <input type="date" class="form-control"  name="tgl_surat" id="tgl_surat">
                        </div>
                        <div class="col-md-4">
                            <label for="ttd_surat" class="form-label">TTD Surat</label>
                            <input type="text" class="form-control"  name="ttd_surat" id="ttd_surat">
                        </div>
                        <div class="col-md-4">
                            <label for="ttd_mengetahui" class="form-label">TTD Mengetahui</label>
                            <input type="text" class="form-control"  name="ttd_mengetahui" id="ttd_mengetahui">
                        </div>
                        <div class="col-md-4">
                            <label for="ttd_menyetujui" class="form-label">TTD Menyetujui</label>
                            <input type="text" class="form-control" name="ttd_menyetujui" id="ttd_menyetujui">
                        </div>


                        <div class="btn-group" role="group" >
                            <button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button>
                        </div>
                        <div class="btn-group" role="group" >
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>

                        
                        </form>
                       
                        

                    </div>
                    </div>
                </row>
            </div>
            <?php 
                            // Taking all values from the form data(input)
                            if (isset($_POST['submit'])){
                                $no_surat =  $_POST['no_surat'];
                                $jenis_surat = $_POST['jenis_surat']; //name atau id kolom
                                $tgl_surat =  $_POST['tgl_surat'];
                                $ttd_surat = $_POST['ttd_surat'];
                                $ttd_mengetahui = $_POST['ttd_mengetahui'];  
                                $ttd_menyetujui = $_POST['ttd_menyetujui'];                      
                                
                                //insert user data into table
                                $result = mysqli_query($con, "INSERT INTO `tbl_surat` (`id`, `no_surat`, `jenis_surat`, `tgl_surat`, `ttd_surat`, `ttd_mengetahui`, `ttd_menyetujui`)
                                VALUES (NULL,'$no_surat','$jenis_surat','$tgl_surat','$ttd_surat','$ttd_mengetahui','$ttd_menyetujui')");
                                // show message when user added
                                header("Location:view.php?pesan=success&frm=add");
                            }
            ?>
    </body>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>