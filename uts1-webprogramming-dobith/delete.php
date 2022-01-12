<?php
$con = new mysqli("localhost", "root", "", "db_vaksin_dobith");
        // Taking all values from the form data(input)
        if (isset($_POST['delete'])){
            $id = $_POST['id_vaksin'];
 
            //insert user data into table
            $result = mysqli_query($con, "DELETE FROM `tbl_vaksin` WHERE `tbl_vaksin`.`id_vaksin` = $id");
            // show message when user added
            // echo "User updated successfully. <a href='view.php'></a>>List Surat</a>";
            // header("Location:view.php");
            header("Location:view.php?pesan=success&frm=delete");
        }
?>