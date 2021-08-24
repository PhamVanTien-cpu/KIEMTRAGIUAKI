<?php 
     include("config/db.php");
     session_start();
     if(!isset($_SESSION['login'])){
         header('location:'.SITEURL.'/admin/login.php');
     }
     include("template/header.php");
    
     
?>
      <div id="main" class="container-fluid">
      <main >
              <h2 class=" text-center">DANH BẠ CÁN BỘ</h2>
              <div class="row">
                    <div class="col-4 " style="margin:auto;">
                    <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" name="txtnamesearh"/>
                 <!-- test -->

                 <!-- test -->

                <button type="submit" class="btn btn-outline-primary" name="btnsearch">search</button>


                <div class="cod-4">
                    
                </div>
                </div>
                    </div>
                </div>
              <div>
                  <a href="http://localhost:8080/hoc/admin/add_cb.php" class="btn btn-success">add new </a>
              </div>
              <div class="row main-content">

                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">full_name</th>
                        <th scope="col">Phone_number</th>
                        <th scope="col">Email</th>                      
                        <th scope="col">name_unit</th>  
                        <th scope="col">image</th>     
                        <th scope="col">update</th>
                        <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                              if(isset($_GET["search"]) && !empty($_GET['search']))
                              {
                                 $key=$_GET["search"];
                                 $sql="SELECT * FROM can_bo WHERE name LIKE '%$key%'";
                                 $result = mysqli_query($conn,$sql);
                              
                                 if(mysqli_num_rows($result) > 0)
                                 {
                                     $i=1;
                                     while($row = mysqli_fetch_assoc($result)){
                                      
                                 ?>
                              
                                         <tr>
                                             <th scope="row"><?php echo $i ;?></th>
                                             <td><?php echo $row['name'] ;?></td>
                                             <td><?php echo $row['phone_number'] ;?></td>
                                             <td><?php echo $row['email'] ;?></td>
                                             <td><?php echo $row['id_don_vi'] ;?></td>
                                             <td><img src="<?php echo $row['image'];?>" class="im" alt="..."></td>                                     
                                             <td><a href="http://localhost:8080/hoc/admin/edit_cb.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                             <td><a href="http://localhost:8080/hoc/admin/delete_cb.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
                                         </tr>
                                 <?php
                                     $i++;
                                     }
                                 }
                              }
                           
                           

                         ?>
                    </tbody>
                </table>
              </div>
          </main>
      </div>
<?php 
     include("template/footer.php");
?>
