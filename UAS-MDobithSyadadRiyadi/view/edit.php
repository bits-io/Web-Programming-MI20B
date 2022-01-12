<?php
    error_reporting(0);
    //memanggil database sql
    include '../controller/Vaksin.php';

    $ctrl = new Vaksin();
    //vaksin
    $id_vaksin = $_GET['id_vaksin'];
    $isi = $ctrl->getData($id_vaksin);
    //puskesmas
    

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
    <title>Edit Data Pascavaksinasi COVID-19 | Kabupaten Ciamis</title>
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
              <div class="form px-10">
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
                  <form method="post" action="<?php echo $ctrl->updateVaksin($id_vaksin);?>" name="form1">
                     <div class="form-group row pb-4">
                    </div>




                    <hr style="border-top: 1px solid gray;">
                     <!--begin::Form Group-->
                    <div class="form-group row">
                    <input type="hidden" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="id_vaksin" id="id_vaksin" placeholder="Nomor NIK" value="<?php echo $isi['id_vaksin']; ?>" autocomplete="off" />
                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">NIK</label>
                      <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="nik" id="nik" placeholder="Nomor NIK" value="<?php echo $isi['nik']; ?>" autocomplete="off" />
                      </div>

                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">Nama Lengkap</label>
                      <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $isi['nama_lengkap']; ?>" autocomplete="off" oninput="this.value = this.value.toUpperCase()"/>
                      </div>

                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">Tanggal Lahir (hh-bb-tttt)</label>
                      <input type="date" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="tanggal_lahir" id="tanggal_lahir" placeholder="contoh: 1960-01-01" value="<?php echo $isi['tanggal_lahir']; ?>" autocomplete="off" />
                      </div>

                      <div class="col-md-6 mb-4">
                      <label class="font-size-h6 font-weight-bolder text-dark">Nomor HP <span style="font-size: 12px" class="text-danger ">* Nomor HP tidak boleh sama</span></label>
                      <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="no_hp" id="no_hp" placeholder="contoh: 0811234567890" value="<?php echo $isi['no_hp']; ?>" autocomplete="off" />
                      </div>
                                      


                    </div>

                     <hr style="border-top: 1px solid gray;">

                    <div class="form-group row">

                          <div class="col-lg-12 mb-4 ">
                             
                           <label for="puskesmas" class="form-label font-size-h6 font-weight-bolder text-dark">Puskesmas</label>
                           <select  style="width: 100%"  class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6"  id="puskesmas" name="puskesmas">
                              
                              
                              <option value="none">-- Pilih Puskesmas --</option>   
                           </select>

                          </div>  
                    </div>
                    <div class="form-group row">
                          <div class="col-lg-12 mb-4">
                             
                           <label class="form-label font-size-h6 font-weight-bolder text-dark">Alamat Lengkap</label>
                           <input autocomplete="off" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" value="<?php echo $isi['alamat']; ?>"  name="alamat" id="alamat" placeholder="Alamat" oninput="this.value = this.value.toUpperCase()" >

                          </div>                      
                    </div>
                    <div class="form-group row">

                      <div class="col-lg-12 mb-4 ">
                      <label for="status_vaksin" class="form-label font-size-h6 font-weight-bolder text-dark">Sudah Vaksin?</label>
                        <select class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6"   id="status_vaksin" name="status_vaksin">
                          
        
                          <option value="none">-- Pilih Status --</option>
                        </select>
                      </div>

                    </div>  
                    <div class="form-group" align="right">
                          
                          <button type="reset" class="btn btn-lg btn-danger font-weight-bold"  id="cancel" name="cancel" >
                          <a class="btn-danger" href="content.php" role="button">Cancel</a>
                         </button>
                         <button type="submit" class="btn btn-lg btn-primary font-weight-bold"  id="update" name="update"> 
                            <span class="title-save">Update</span>
                         </button>
                   </div>

                  </form>
                  
                  
                  <!--end::Form Group-->
                </div>
                <!--end: Wizard Step 1-->

                </div>
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
   
  </body>
  <!--end::Body-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--end::Page Scripts-->

    <script type="text/javascript">
      $(document).ready(function() {
        //alert('test');
        show_puskesmas(); //memanggil function yang ada di bawah
        function show_puskesmas(){ //untuk menampilkan data puskesmas
          $.ajax({
            type : 'GET',
            url : 'api_puskesmas.php',
            async : false,
            dataType : 'json',
            success : function(data) {
              var html = '';
              var i;
              var no;
              html += '<option selected value="<?php echo $isi['puskesmas']; ?>">'+data[i].puskesmas+'</option>';
              for(i=0; i<data.length; i++){
                no = i + 1;
                html += '<option value="' + data[i].id_puskesmas+'">'+data[i].puskesmas+'</option>';
              } //akhir looping

              $('#puskesmas').html(html);// mengirim data ke html
            }
          });
        }


        show_status(); //memanggil function yang ada di bawah
        function show_status(){ //untuk menampilkan data puskesmas
          $.ajax({
            type : 'GET',
            url : 'api_status.php',
            async : false,
            dataType : 'json',
            success : function(data) {
              var html = '';
              var i;
              var no;
              html += '<option selected value="<?php echo $isi['status_vaksin']; ?>">'+data[i].status_vaksin+'</option>';
              for(i=0; i<data.length; i++){
                no = i + 1;
                html += '<option value="' + data[i].id_status+'">'+data[i].status_vaksin+'</option>';
              } //akhir looping

              $('#status_vaksin').html(html);// mengirim data ke html
            } //penutup success
          }); // penutup $ ajax
        } // penutup function

        
      });//penutup dokumen ready function
    </script>
  
</html>


