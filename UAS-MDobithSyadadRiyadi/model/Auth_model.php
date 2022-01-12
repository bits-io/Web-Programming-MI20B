<?php
    class Auth_model {

        protected $db;
        function __construct($db)
        {
            $this->db = $db;
        }
        function proses_login($user,$pass)
        {
            // untuk password kita enkrip dengan md5
            $row = $this->db->prepare('SELECT * FROM tbl_user WHERE username=? AND password=md5(?)');
            $row->execute(array($user,$pass));
            $count = $row->rowCount();
            if($count > 0)
            {
                return $hasil = $row->fetch();
            }else{
                return 'gagal';
            }
        }
        
        function simpanRegister($data){
            //buat array untuk isi values insert sumber kode
            //pdo prepared multi insert
            $rowsSQL = array();
            //buat bind param prepared statment
            $toBind = array();
            //list nama kollom
            $columnNames = array_keys($data[0]);
            foreach($data as $arrayIndex => $row){
                $params = array();
                foreach($row as $columnName => $columnValue){
                    $param = ":" . $columnName . $arrayIndex;
                    $params[] = $param;
                    $toBind[$param] = $columnValue;
                }
                $rowsSQL[] = "(" . implode(", ", $params) . ")";
            }
            $sql = "INSERT INTO tbl_user (" . implode(", ", $columnNames). ") VALUES " . implode(", ", $rowsSQL);
            $row = $this->db->prepare($sql);
            //bind our values
            foreach($toBind as $param => $val){
                $row->bindValue($param, $val);
            }
            //Execute our statment (insert the data)
            return $row->execute();
        }
    }
?>