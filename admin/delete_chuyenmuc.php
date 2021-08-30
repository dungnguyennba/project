<?php
    include("configbtl/config.php");
    

    //PHP: mặc định, khi sử dụng theo phương thức GET, mọi giá trị lưu trong 1 biến SIÊU TOÀN CỤC ($_GET) > mảng
    //Giá trị truyền sang nằm sau dấu ? có dạng key=value
    
        $id_can_xoa = $_GET['myid'];
    
    //Bước 02: Thực hiện câu truy vấn
    $sql = "DELETE FROM tbl_category WHERE id=$id_can_xoa";
    
    $result = mysqli_query($conn,$sql);
    
    //Bước 03: Xử lý kết quả nếu mysqli_query xóa thành công > trả về true
    if(mysqli_query($conn,$sql)){
        header('location:'.SITEURL.'/admin/trangchu.php');
    }
?>