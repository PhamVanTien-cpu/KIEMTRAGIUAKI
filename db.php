<?php
define('SITEURL','http://localhost:8080/hoc');
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB_NAME','qldb');
define('PORT','3306');

$conn = mysqli_connect(HOST, USER,PASS,DB_NAME);
if(!$conn){
    die("Không thể kết nối".mysqli_connect_error());
}

?>