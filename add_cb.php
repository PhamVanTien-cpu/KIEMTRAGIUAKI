<?php 
     include("config/db.php");
     session_start();
     include("template/header.php");

      $sql =" SELECT * FROM don_vi ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
        }
      } else {
        echo "0 results";
      }
      $conn->close();

    //     $row = mysqli_fetch_assoc($result);
    //     print_r(array_values($row));
?>
      <div id="main" class="container-fluid">
      <main>
        <form method="POST" action=""  >
            <h1 class="h3 mb-3 fw-normal">EDIT DANH BẠ CÁN BỘ</h1>
            <div class="form-floating">
            <input type="text" class="form-control" id="txtid" name="txtid" >
            <label for="floatingInput">id</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="txtfullName" name="txtname" >
            <label for="floatingInput"> name</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="intphone_number" name="intphone_number" >
            <label for="floatingInput">Phone number</label>
            </div>

            <div class="form-floating">
            <input type="email" class="form-control" id="txtemail" name="txtemail" >
            <label for="floatingInput">Email</label>
            </div>
            <!-- <div class="form-floating">
            <input type="text" class="form-control" id="intphone_number" name="name_unit" >
            <label for="floatingInput">Name_unit</label>
            <div> -->
            
            <!-- <div class="form-floating">
            <input type="text" class="form-control" id="txtemail" name="txtname_unit" >
            <label for="floatingInput">Name_unit</label>
            </div> 
             <select class="form-control">
                 <?php foreach($row as $donvi) :?>
                  <option value="">
                      <?php echo $donvi['name_unit']  ;?>
                
                
                </option>
                <?php endforeach; ?>
                </select>
            <label for="floatingInput">name_unit</label>
            </div> -->

            <div class="form-floating">
            <input type="text" class="form-control" id="txtimage" name="txtimage" >
            <label for="floatingInput">image</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnadd_cb">ADD DANH BA</button>
           
        </form>
        <?php
            
                      
            if(isset($_POST['btnadd_cb'])){
                $id  = $_POST['txtid'];
                $name  = $_POST['txtname'];
                $phone     =  $_POST['intphone_number'];
                $email      =  $_POST['txtemail'];
                // $unit      =  $_POST['name_unit'];
                $img     =  $_POST['txtimage'];
             //    $pass_hash = password_hash($pass,PASSWORD_DEFAULT);
          //    UPDATE table_name
          //    SET column1 = value1, column2 = value2, ...
          //    WHERE condition;
          
                $sql = "INSERT INTO can_bo (id,name, phone_number,email,image)  VALUE('$id','$name','$phone','$email ' ,'$img ') ";
               
              
                         
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







