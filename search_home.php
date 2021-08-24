<?php 
        include("header.php");
    ?>
        <div class="row">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/xt11.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/726b62016d5e9a00c34f.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/bia.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
        </div>
        <!-- search -->
        <div class="row ">       
            <div class="col-12 form_search ">
              <!-- <form action="">
                  <input type="search" name="txtformsearch" placeholder="search">
                   <input type="submit" name="sbmformsearch" value="search">
              </form> -->
            </div>         
        </div>
        <!-- end search  -->
        <!-- body -->
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <h3>THÔNG TIN GIẢNG VIÊN ĐẠI HỌC THỦY LỢI</h3>
            </div>
        </div>

        <div class="row margin padding">

            <?php 
                $conn = mysqli_connect('localhost', 'root','','qldb');
                if(!$conn){
                    die("Không thể kết nối");
                }
                if(isset($_GET["search"]) && !empty($_GET['search'])){
                    $key=$_GET["search"];
                    $sql="SELECT * FROM can_bo WHERE name LIKE '%$key%'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                             <div class="col-6 col-sm-4 col-lg-3 col-xl-2 ">
                              <div class="boder margin1 padding1 "> 
                              <div> <img src="<?php echo $row['image'];?>" class="im" alt="...">  </div>                                                                
                               <div class="text"> <p><strong>name:</strong><?php echo $row['name'] ;?></p> </div>                                                                 
                              <div class="text"> <p><strong>phone:</strong><?php echo $row['phone_number'] ;?></p>  </div>                                                                                                
                              <div class="text"> <p><strong>email:</strong><?php echo $row['email'] ;?></p>  </div>                                                               
                              <div class="text"> <p><strong>đơn vị:</strong><?php echo $row['id_don_vi'] ;?></p> </div>                                                                 
                             </div>
                             </div>
                <?php
                        }
    
                    }
                }
               
               
                mysqli_close($conn)
            ?>



        </div> 
        
       <!-- end body  -->
<?php
    include("footer.php");
?>