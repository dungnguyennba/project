<?php
    // Bước 01: Kết nối Server:
    //Định nghĩa Hằng số trong PHP
    define('SITEURL','http://localhost:81/btl');
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','Fpt_tintuc');
    define('PORT','3306');
    $conn = mysqli_connect(HOST,USER,PASS,DB_NAME);
    if(!$conn){
        die("Không thể kết nối: ".mysqli_connect_error());
    }
?>