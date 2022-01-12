<?php
    class Vaksin_model {

        protected $db;
        function __construct($db)
        {
            $this->db = $db;
        }
        function tampil_data()
        {
            $row = $this->db->prepare("SELECT * FROM tbl_vaksin");
            $row->execute();
            return $hasil = $row->fetchAll();
        }
        function getData($id_vaksin){
            $row = $this->db->prepare("SELECT * FROM tbl_vaksin WHERE id_vaksin = $id_vaksin");
            $row->execute();
            return $hasil = $row->fetch();
        }
        function getStatusData(){
            $row = $this->db->prepare("SELECT * FROM tbl_status");
            $row->execute();
            return $hasil = $row->fetchAll();
        }
        function getPuskesmasData(){
            $row = $this->db->prepare("SELECT * FROM tbl_puskesmas");
            $row->execute();
            return $hasil = $row->fetchAll();
        }
        function simpanData($data){
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
            $sql = "INSERT INTO tbl_vaksin (" . implode(", ", $columnNames). ") VALUES " . implode(", ", $rowsSQL);
            $row = $this->db->prepare($sql);
            //bind our values
            foreach($toBind as $param => $val){
                $row->bindValue($param, $val);
            }
            //Execute our statment (insert the data)
            return $row->execute();
        }
        function updateData($data,$id_vaksin)
        {
            //sumber kode
            // creating generic update function using php mysql$s
            $setPart = array();
            foreach ($data as $key => $value) {
                $setPart[] = $key."=:".$key;
            }    
            $sql  = "UPDATE tbl_vaksin SET ".implode(', ', $setPart)." WHERE $id_vaksin = :id_vaksin";
            $row = $this->db->prepare($sql);
            //bind pur values
            $row->bindValue(':id_vaksin', $id_vaksin); //where
            foreach ($data as $param => $val) {
                $row->bindValue($param, $val);
            }
            return $row->execute();
        }
        function hapusData($id_vaksin){
            $sql = "DELETE FROM tbl_vaksin WHERE id_vaksin = ?";
            $row = $this->db->prepare($sql);
            return $row->execute(array($id_vaksin));
        }

        function simpanJenisPuskesmas($data){
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
            $sql = "INSERT INTO tbl_puskesmas (" . implode(", ", $columnNames). ") VALUES " . implode(", ", $rowsSQL);
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