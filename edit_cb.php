<?php 
     include("config/db.php");
     session_start();
     include("template/header.php");
?>
      <div id="main" class="container-fluid">
      <main>
        <form method="POST" action=""  >
            <h1 class="h3 mb-3 fw-normal">EDIT DANH BẠ CÁN BỘ</h1>
            <!-- <div class="form-floating">
            <input type="text" class="form-control" id="txtid" name="txtid" >
            <label for="floatingInput">id</label>
            </div> -->

            <div class="form-floating">
            <input type="text" class="form-control" id="txtfullName" name="txtname" >
            <label for="floatingInput"> name</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="intphone_number" name="intphone_number" >
            <label for="floatingInput">Phone number</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="txtemail" name="txtemail" >
            <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="txtname_unit" name="txtname_unit" >
            <label for="floatingInput">name_unit</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="txtimage" name="txtimage" >
            <label for="floatingInput">image</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnEdit_cb">EDIT DANH BA</button>
           
        </form>
        <?php
                      
            if(isset($_POST['btnEdit_cb'])){
               $id_edit_cb = $_GET['id'];
            
               //  $id        = $_POST['txtid'];
                $Name  = $_POST['txtname'];
                $phone     =  $_POST['intphone_number'];
                $email      =  $_POST['txtemail'];
                // $unit      =  $_POST['txtname_unit'];
                $img     =  $_POST['txtimage'];
             //    $pass_hash = password_hash($pass,PASSWORD_DEFAULT);
          //    UPDATE table_name
          //    SET column1 = value1, column2 = value2, ...
          //    WHERE condition;
 
                $sql = "UPDATE can_bo SET  name = '$Name' ,phone_number = '$phone' ,email = '$email ', image = '$img ' WHERE id = $id_edit_cb ";
                $result = mysqli_query($conn,$sql);
                
                           
                if(mysqli_query($conn,$sql)){
                    header('location:'.SITEURL.'/admin/index.php');
                }
            }
 
            ?>
 
   </main>
      </div>
<?php 
     include("template/footer.php");
?>
