<?php
    //panggil file
    include '../Database.php';
    include '../model/Auth_model.php';

    class Auth {
        public $model;

        function __construct(){
            $db = new Database();
            $conn = $db->DBConnect();
            $this->model = new Auth_model($conn); //menghilangkan pesan error
        }

        function login(){
            if(isset($_POST['login'])){
                session_start();
                if ($_POST["code"] != $_SESSION["code"] OR $_SESSION["code"]=='') {
                    # code alert
                    header("Location:login.php?pesan=captchasalah&frm=login");
                } else {
                    $user = strip_tags($_POST['user']);
                    $pass = strip_tags($_POST['pass']);
                    $result = $this->model->proses_login($user,$pass);
                    
                    if($result == 'gagal'){
                        header("Location:login.php?pesan=gagal&frm=login");
                    }else{
                        session_start();
                        $_SESSION['nama_pengguna'] = $result['nama_pengguna'];
                        $_SESSION['username'] = $result['username'];
                        header("Location:content.php?pesan=success&frm=login");
                    }
                }
            }
        }

        function acakCaptcha() {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
           
        //untuk menyatakan $pass sebagai array
        $pass = array(); 
         
           //masukkan -2 dalam string length
            $panjangAlpha = strlen($alphabet) - 2; 
            for ($i = 0; $i < 5; $i++) {
                $n = rand(0, $panjangAlpha);
                $pass[] = $alphabet[$n];
            }
         
           //ubah array menjadi string
            return implode($pass); 
        }

        function register(){
            // Taking all values from the form data(input)
            if (isset($_POST['register'])){
                $username =  $_POST['name'];
                $password = $_POST['pass']; //name atau id kolom
                $no_telepon = $_POST['phonenumber'];
                $email = $_POST['email'];  
                $alamat = $_POST['address'];                  
                

                $data[] = array(
                    'username' => $username, 
                    'password' => $password, 
                    'no_telepon' => $no_telepon, 
                    'email' => $email, 
                    'alamat' => $alamat
                );
                echo $data;
                $result = $this->model->simpanRegister($data);
                if($result){
                    echo "Alert";
                    //header("Location:login.php?pesan=success&frm=add");
                    //echo "<script>window.location.href='login.php?pesan=success&frm=regis';</script>";
                } else {
                    //header("Location:login.php?pesan=failed&frm=failed");
                    //echo "<script>window.location.href='login.php?pesan=success&frm=failed';</script>";
                }
            }
        }

        
        
    }
?>