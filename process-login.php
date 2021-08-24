<?php 
    include("config/db.php");
     
    if(isset($_POST['sbmLogin'])){
        $txtName =$_POST['txtName'];
        $pass = $_POST['txtPass'];

        $sql = "SELECT * FROM admin WHERE full_name='$txtName' AND 	password ='$pass' ";
        $result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);
        if($count == 1){
            header('location:'.SITEURL.'/admin/index.php');
        }
        else{
            header('location:'.SITEURL.'/admin/login.php');
        }
    }
?>