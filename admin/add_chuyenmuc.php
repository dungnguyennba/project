<?php
    include("configbtl/config.php");
    include("templatebtl/header.php");
?>
<style>
    .form-control{
        width: 50%;
    }
</style>
<div class="container">
    <h4>Thêm Chuyên Mục</h4> 
    <form action="" method="POST">
    <div class="form-group">
            <label for="exampleInputEmail1">Tên Chuyên Mục</label>
            <input type="text" class="form-control " name="txt_chuyenmuc" placeholder="Tên chuyên mục...">
    </div>
    <br>
        <button type="submit" class="btn btn-primary" name="addchuyenmuc">Thêm Chuyên Mục</button>
        
    </form>

    <!--  xử lý backend-->
    <?php
                if(isset($_POST['addchuyenmuc'])){
                    $fullName   = $_POST['txt_chuyenmuc'];
                    
                // truy vấn csdl
                    $sql = "INSERT INTO tbl_category (name)
                    VALUES ('$fullName')";
                    if(mysqli_query($conn,$sql)){
                        header('location:'.SITEURL.'/admin/trangchu.php');
                    }
                    
                }
         ?>       
</div>