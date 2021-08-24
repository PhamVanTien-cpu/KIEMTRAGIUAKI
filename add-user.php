<?php 
     include("config/db.php");
     session_start();
     include("template/header.php");
?>
      <div id="main" class="container-fluid">
      <main>
        <form method="POST" action=""  >
            <h1 class="h3 mb-3 fw-normal">ADD USER</h1>
            <div class="form-floating">
            <input type="text" class="form-control" id="txtid" name="txtid" >
            <label for="floatingInput">id</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="txtfullName" name="txtfullName" >
            <label for="floatingInput">full name</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnAddUser">ADD USER</button>
           
        </form>
        <?php
            
           if(isset($_POST['btnAddUser'])){
           
               $id        = $_POST['txtid'];
               $fullName  = $_POST['txtfullName'];
               $pass      =  $_POST['txtPass'];
            //    $pass_hash = password_hash($pass,PASSWORD_DEFAULT);

               $sql = "INSERT INTO admin (id, full_name,password)  VALUE('$id','$fullName','$pass') ";
               
                          
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
