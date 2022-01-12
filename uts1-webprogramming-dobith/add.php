<?php
  error_reporting(0);
  //memanggil database sql
  $con = new mysqli("localhost", "root", "", "db_vaksin_dobith");
  //memanggil 
  $query = mysqli_query($con, "SELECT * FROM tbl_puskesmas");
  $query2 = mysqli_query($con, "SELECT * FROM tbl_status");
?>

<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta charset="utf-8" />
    <title>Data Pascavaksinasi COVID-19 | Kabupaten Ciamis</title>
    <meta name="description" content="Form controls validation" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/global.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="assets/css/bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
     <link rel="icon" type="image/x-icon" href="assets/img/ciamis.png" />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Login-->
      <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
        <!--begin::Content-->
        <div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
          <!--begin::Container-->
          <div class="login-content login-content-signup d-flex flex-column">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column px-10">
              <!--begin::Aside header-->
              <a href="#" class="login-logo pt-lg-20 pb-lg-2 pb-2">
                <img src="assets/img/ciamis.png" class="max-h-70px" alt="" />

              </a>
              <br>
              <!--end::Aside header-->

            </div>
            <!--end::Aside Top-->
            <!--begin::Signin-->
          <!--   ============== PANGGIL KONTEN ============ -->

                        


            <div class="login-form">
              <!--begin::Form-->
              <form class="form px-10" method="post" action="add.php">
                <!--begin: Wizard Step 1-->
                <div class="" data-wizard-type="step-content" data-wizard-state="current">
                  <!--begin::Title-->
                  <div class="pb-10 pb-lg-12">
                      <br>
                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h4-lg">Syarat & Ketentuan :</h3>
                    <div class="font-weight-bold font-size-h6">
                      <span class="text-danger">*</span>• Form ini hanya untuk orang <b>Ciamis</b><br>
                  </div>

                

                  </div>
                  <!--begin::Title-->
                  <form method="post" action="add.php">
                     <div class="form-group row pb-4">

                    </div>




                    <hr style="border-top: 1px solid gray;">
                     <!--begin::Form Group-->
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">NIK</label>
                      <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="nik" id="nik" placeholder="Nomor NIK" value="" autocomplete="off" />
                      </div>

                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">Nama Lengkap</label>
                      <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="" autocomplete="off" oninput="this.value = this.value.toUpperCase()"/>
                      </div>

                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">Tanggal Lahir (hh-bb-tttt)</label>
                      <input type="date" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="tanggal_lahir" id="tanggal_lahir" placeholder="contoh: 1960-01-01" value="" autocomplete="off" />
                      </div>

                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">Nomor HP <span style="font-size: 12px" class="text-danger ">* Nomor HP tidak boleh sama</span></label>
                      <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="no_hp" id="no_hp" placeholder="contoh: 0811234567890" value="" autocomplete="off" />
                      </div>
                                      


                    </div>

                     <hr style="border-top: 1px solid gray;">

                    <div class="form-group row">

                          <div class="col-lg-12 mb-4 ">
                             
                           <label class="font-size-h6 font-weight-bolder text-dark">Puskesmas</label>
                           <select  style="width: 100%"  class="form-control"  id="puskesmas" name="puskesmas">
                                                            <option>-- Pilih Puskesmas --</option>
                                                            <?php
                                                                  foreach ($query as $jp){
                                                            ?>
                                                            <option value="<?=$jp['id_puskesmas']?>"><?=$jp['puskesmas']?></option>
                                                            <?php
                                                                  }
                                                            ?>
                                                           
                           </select>

                          </div>  

  
                          <div class="col-lg-12 mb-4">
                             
                           <label class="font-size-h6 font-weight-bolder text-dark">Alamat Lengkap</label>
                           <input autocomplete="off" class="form-control"  name="alamat" id="alamat" placeholder="Alamat" oninput="this.value = this.value.toUpperCase()" >

                          </div>                      
                    </div>
                    <div class="form-group row">

                      <div class="col-lg-12 mb-4 ">
                      <label class="font-size-h6 font-weight-bolder text-dark">Sudah Vaksin?</label>
                        <select class="form-control"   id="status_vaksin" name="status_vaksin">
                            <option value="">-- Pilih Status --</option>
                                  <?php
                                      foreach ($query2 as $s){
                                  ?>
                               <option value="<?=$s['id_status']?>"><?=$s['status_vaksin']?></option>
                                  <?php
                                       }
                                  ?>
                        </select>
                      </div>

                    </div>  
                    <div class="form-group" align="right">
                          
                          <button type="reset" class="btn btn-lg btn-danger font-weight-bold"  id="cancel" name="cancel" > 
                             <span style="" class="title-save">Cancel</span>
                         </button>
                         <button type="submit" class="btn btn-lg btn-primary font-weight-bold"  id="add" name="add"> 
                             <span style="" class="title-save">Add</span>
                         </button>
                   </div>

                  </form>
                  
                  
                  <!--end::Form Group-->
                </div>
                <!--end: Wizard Step 1-->

              </form>
              <!--end::Form-->
            </div>
            

                                
            <!-- ============== END PANGGIL KONTEN ========== -->
            <!--end::Signin-->
          </div>
          <!--end::Container-->
        </div>
        <!--begin::Content-->
        <!--begin::Aside-->
        <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" style="background:linear-gradient(to bottom right, #a0bb2e 37%, #f79123 100%) ">
          <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(assets/img/form.svg);">
            <h1 class="font-size-h1 pt-0 pt-lg-40  pl-lg-20 pb-lg-0 pl-5 py-5 m-0 justify-content-lg-start display2-sm  text-white ">
              Data Vaksinasi <br>COVID-19<br><span class="bg-warning font-weight-boldest pl-2 pr-2">Untuk Wilayah Kabupaten Ciamis</span></h1>            <!--end::Aside title-->
          </div>
        </div>
        <!--end::Aside-->
      </div>
      <!--end::Login-->
    </div>
    <!--end::Main-->
   
    <?php 
                            // Taking all values from the form data(input)
                            if (isset($_POST['add'])){
                                $nik =  $_POST['nik'];
                                $nama_lengkap = $_POST['nama_lengkap']; //name atau id kolom
                                $tanggal_lahir =  $_POST['tanggal_lahir'];
                                $no_hp = $_POST['no_hp'];
                                $puskesmas = $_POST['puskesmas'];  
                                $alamat = $_POST['alamat'];
                                $status_vaksin = $_POST['status_vaksin'];                      
                                
                                //insert user data into table
                                $result = mysqli_query($con, "INSERT INTO `tbl_vaksin` (`id_vaksin`, `nik`, `nama_lengkap`, `tanggal_lahir`, `no_hp`, `puskesmas`, `alamat`, `status_vaksin`) VALUES (NULL, '$nik', '$nama_lengkap', '$tanggal_lahir', '$no_hp', '$puskesmas', '$alamat', '$status_vaksin')");
                                // show message when user added
                                //header("Location:view.php?pesan=success&frm=add");
                                echo "<script>window.location.href='view.php?pesan=success&frm=add';</script>";
                                //exit;
                            }
                            
                  ?>
    
  </body>
  <!--end::Body-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--end::Page Scripts-->
  
</html>


