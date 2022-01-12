<?php
    error_reporting(0);
    include '../controller/Auth.php';
    $ctrl = new Auth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/x-icon" href="assets/img/ciamis.png" />
</head>

<body>

        <?php
            $pesan = $_GET['pesan'];
            $frm = $_GET['frm'];
            // echo $pesan;
            if ($pesan == 'success' && $frm=='logout'){
        ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Selamat Anda Berhasil Logout.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
            } else if ($pesan == 'gagal' && $frm=='login'){
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> Username atau Password Salah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            } else if($pesan == 'captchasalah' && $frm=='login'){
        ?>
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> Captcha Salah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php
            }
        ?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="<?php echo $ctrl->login();?>">
                    <span class="login100-form-title">
						Member Login
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Valid usernam is required: abc123">
                        <input class="input100" type="text" name="user" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user-md" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input text-center mt-4" data-validate="Password is required">
                        <img src="captcha.php" alt="gambar" /> 
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Captcha isi">
                        <input class="input100" type="text" name="code" placeholder="Captcha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-openid" aria-hidden="true"></i>
						</span>
                    </div>

                    

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
							Login
						</button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
							Forgot
						</span>
                        <a class="txt2" href="#">
							Username / Password?
						</a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
							
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>

            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>