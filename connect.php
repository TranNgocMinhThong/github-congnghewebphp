<?php
$username = "ptud"; // Khai báo username
$password = "ptud";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "ptudweb";      // Khai báo database

// Kết nối database tintuc
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}

?>