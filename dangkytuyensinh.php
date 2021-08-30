<?php
    include("configpage/configpage.php");
      

    if(isset($_POST['guithongtin'])){
        $phuhuynh   = $_POST['txt_phuhuynh'];
        $sodienthoai   = $_POST['txt_sodienthoai'];
        $hocsinh      = $_POST['txt_hocsinh'];
        $ddmmyy       = $_POST['txt_ddmmyy'];
    // truy vấn csdl
        $sql = "INSERT INTO tbl_duthituyensinh (phu_huynh, so_dien_thoai, hocsinh,ngay_thang_nam)
        VALUES ('$phuhuynh','$sodienthoai','$hocsinh',' $ddmmyy')";
        if(mysqli_query($conn,$sql)){
            header('location:'.SITEURL.'/index.php');
        }
        
    }
?>