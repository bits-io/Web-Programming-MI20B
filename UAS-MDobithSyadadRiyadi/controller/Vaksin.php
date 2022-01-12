<?php
    error_reporting(0);
    //panggil file
    include '../Database.php';
    include '../model/Vaksin_model.php';

    class Vaksin {
        public $model;

        function __construct(){
            $db = new Database();
            $conn = $db->DBConnect();
            $this->model = new Vaksin_model($conn); //menghilangkan pesan error
        }

        function index(){
            // $vaksin = $this->model->tampil_data();
            // return $vaksin;
            session_start();
            if(!empty($_SESSION)){
                $vaksin = $this->model->tampil_data();
                return $vaksin;
            }else{
                header("Location:login.php");
            }
        }

        function getData($id_vaksin){
            $vaksin = $this->model->getData($id_vaksin);
            return $vaksin;
        }
        function getStatusData(){
            $status = $this->model->getStatusData();
            echo json_encode($status);
            //return $status;
        }
        function getPuskesmasData(){
            $puskesmas = $this->model->getPuskesmasData();
            echo json_encode($puskesmas);
            //return $puskesmas;
        }
        
        function simpanVaksin(){
            // Taking all values from the form data(input)
            if (isset($_POST['add'])){
                $nik =  $_POST['nik'];
                $nama_lengkap = $_POST['nama_lengkap']; //name atau id kolom
                $tanggal_lahir =  $_POST['tanggal_lahir'];
                $no_hp = $_POST['no_hp'];
                $puskesmas = $_POST['puskesmas'];  
                $alamat = $_POST['alamat'];
                $status_vaksin = $_POST['status_vaksin'];                      
                

                $data[] = array(
                    'id_vaksin' => NULL,
                    'nik' => $nik, 
                    'nama_lengkap' => $nama_lengkap, 
                    'tanggal_lahir' => $tanggal_lahir, 
                    'no_hp' => $no_hp, 
                    'puskesmas' => $puskesmas, 
                    'alamat' => $alamat, 
                    'status_vaksin' => $status_vaksin
                );
                $result = $this->model->simpanData($data);
                if($result){
                    //header("Location:content.php?pesan=success&frm=add");
                    echo "<script>window.location.href='content.php?pesan=success&frm=add';</script>";
                } else {
                    header("Location:content.php?pesan=failed&frm=failed");
                    //echo "<script>window.location.href='content.php?pesan=success&frm=failed';</script>";
                }
            }
        }
        function updateVaksin($id_vaksin){
            // Taking all values from the form data(input)
            if (isset($_POST['update'])){
                $id_vaksin = $_POST['id_vaksin'];
                $nik =  $_POST['nik'];
                $nama_lengkap = $_POST['nama_lengkap']; //name atau id kolom
                $tanggal_lahir =  $_POST['tanggal_lahir'];
                $no_hp = $_POST['no_hp'];
                $puskesmas = $_POST['puskesmas'];  
                $alamat = $_POST['alamat'];
                $status_vaksin = $_POST['status_vaksin'];                      
                

                $data = array(
                    'nik' => $nik, 
                    'nama_lengkap' => $nama_lengkap, 
                    'tanggal_lahir' => $tanggal_lahir, 
                    'no_hp' => $no_hp, 
                    'puskesmas' => $puskesmas, 
                    'alamat' => $alamat, 
                    'status_vaksin' => $status_vaksin
                );
                $result = $this->model->updateData($data, $id_vaksin);
                if($result){
                    header("Location:content.php?pesan=success&frm=edit");
                    //echo "<script>window.location.href='content.php?pesan=success&frm=edit';</script>";
                } else {
                    header("Location:content.php?pesan=success&frm=failed");
                    //echo "<script>window.location.href='content.php?pesan=success&frm=edit';</script>";
                }
            }
        }
        function hapusVaksin(){
            if (isset($_POST['delete'])){
                $id_vaksin = $_POST['id_vaksin'];
                
                $result = $this->model->hapusData($id_vaksin);
                if ($result){
                    //header('Refresh: 1; url:content.php?pesan=success&frm=delete');
                    header("Refresh: 2; Location:content.php?pesan=success&frm=delete; location.reload();");
                    //echo "<script>window.location.href='content.php?pesan=success&frm=delete';</script>";
                } else {
                    header("Refresh: 2; Location:content.php?pesan=success&frm=failed");
                    //echo "<script>window.location.href='content.php?pesan=success&frm=delete';</script>";
                }
                
            }
        }

        function logout()
        {
            if(isset($_POST['logout']))
            {
                session_start();
                session_destroy();
                header("Location:login.php?pesan=success&frm=logout");
            }
        }

        function simpanPuskesmas(){
            
            $optpuskesmas = $_POST['optpuskesmas'];
            $data[] = array(
                'puskesmas' => $optpuskesmas,
            );
    
    
            $add = $this->model->simpanJenisPuskesmas($data);
            if ($add) {
                $response['status_code'] = 1;
                $response['optpuskesmas'] = 'Success';
                echo json_encode($response);
            } else {
                $response['status_code'] = 0;
                $response['optpuskesmas'] = 'failed';
                echo json_encode($response);
            }
           
            
        }
        
    }
?>