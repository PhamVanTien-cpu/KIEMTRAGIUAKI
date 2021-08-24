<?php 
     include("config/db.php");

     $id_delete = $_GET['id'];

     $sql = " DELETE FROM admin WHERE  id = $id_delete";

     $result = mysqli_query($conn,$sql);


     if($result == true){
         header('location:'.SITEURL.'/admin/use.php');
     }

?>