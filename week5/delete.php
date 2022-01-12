<?php
$con = new mysqli("localhost", "root", "", "db_surat_dobith");
        // Taking all values from the form data(input)
        if (isset($_POST['delete'])){
            $id = $_POST['id'];
 
            //insert user data into table
            $result = mysqli_query($con, "DELETE FROM `tbl_surat` WHERE `tbl_surat`.`id` = $id");
            // show message when user added
            // echo "User updated successfully. <a href='view.php'></a>>List Surat</a>";
            // header("Location:view.php");
            header("Location:view.php?pesan=success&frm=delete");
        }
?>