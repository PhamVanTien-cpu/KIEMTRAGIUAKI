<?php 
     include("config/db.php");
     session_start();
     include("template/header.php");
?>
      <div id="main" class="container-fluid">
      <main>
        <form method="POST" action=""  >
            <h1 class="h3 mb-3 fw-normal">ChangePassword</h1>
            <div class="form-floating">
            <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnEdit">EDIT PASS USER</button>
           
        </form>
        <?php
                      
            if(isset($_POST['btnEdit'])){
               $id_editpass = $_GET['id'];
            
            
                $pass      =  $_POST['txtPass'];
             //    $pass_hash = password_hash($pass,PASSWORD_DEFAULT);
          //    UPDATE table_name
          //    SET column1 = value1, column2 = value2, ...
          //    WHERE condition;
 
                $sql = "UPDATE admin SET  password = '$pass' WHERE id = $id_editpass ";
                $result = mysqli_query($conn,$sql);
                
                           
                if(mysqli_query($conn,$sql)){
                    header('location:'.SITEURL.'/admin/use.php');
                }
            }
 
            ?>
 
   </main>
      </div>
<?php 
     include("template/footer.php");
?>
