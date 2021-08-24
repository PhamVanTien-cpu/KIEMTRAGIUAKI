<?php 
     include("config/db.php");
     session_start();
     include("template/header.php");
?>
      <div id="main" class="container-fluid">
      <main>
        <form method="POST" action=""  >
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
            <input type="text" class="form-control" id="txtName" name="txtName" >
            <label for="floatingInput">full name</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="sbmLogin">Sign in</button>
           
        </form>
        <?php 
           if(isset($_POST['sbmLogin'])){
               $txtName =$_POST['txtName'];
               $pass = $_POST['txtPass'];
       
               $sql = "SELECT * FROM admin WHERE full_name='$txtName' AND 	password ='$pass' ";
               $result = mysqli_query($conn,$sql);
       
               $count = mysqli_num_rows($result);
               if($count == 1){      
                   $_SESSION['login']  = $txtName;         
                   header('location:'.SITEURL.'/admin/index.php');
               }
               else{
                   
                   header('location:'.SITEURL.'/admin/login.php');
               }
           }
        ?> 
   </main>
      </div>
<?php 
     include("template/footer.php");
?>
