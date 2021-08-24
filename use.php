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
              <h2 class=" text-center">DANH BẠ USE ADMIN</h2>
              <div>
                  <a href="http://localhost:8080/hoc/admin/add-user.php" class="btn btn-success">add new user</a>
              </div>
              <div class="row main-content">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">full_name</th>
                        <th scope="col">password</th>
                        <th scope="col">change password</th>
                        <th scope="col">update</th>
                        <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 

                            $sql =" SELECT * FROM admin";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result) > 0)
                            {
                                $i=1;
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ;?></th>
                                        <td><?php echo $row['full_name'] ;?></td>
                                        <td><?php echo $row['password'] ;?></td>
                                        <td><a href="http://localhost:8080/hoc/admin/ChangePassword.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                        <td><a href="http://localhost:8080/hoc/admin/editUser.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a href="deleteUser.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash-fill"></i></a></td>
                                    </tr>
                            <?php
                                $i++;
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
