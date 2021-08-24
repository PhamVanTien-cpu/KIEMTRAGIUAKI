
    <?php 
     
     include("config/db.php");
    
     $id_delete = $_GET['id'];
     echo $id_delete;
    
     $sql = " DELETE FROM can_bo WHERE  id = $id_delete ";
    
     $result = mysqli_query($conn,$sql);
       
     
     if($result == true){
         header('location:'.SITEURL.'/admin/index.php');
     }

   ?>
