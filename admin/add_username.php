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
    <h4>Thêm User Mới</h4>
    <form method="POST" active="">
        <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control " name="txt_fullname" placeholder="Enter fullname">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" name="txt_username" placeholder="Enter username">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="txt_email" placeholder="Enter email">
            
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="txt_password" placeholder="Password">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary" name="adduser">ADD TO USER</button>
    </form>
        <!--  xử lý backend-->
        <?php
                if(isset($_POST['adduser'])){
                    $fullName   = $_POST['txt_fullname'];
                    $userName   = $_POST['txt_username'];
                    $email      = $_POST['txt_email'];
                    $pass       = $_POST['txt_password'];
                // truy vấn csdl
                    $sql = "INSERT INTO tbl_admin (full_name, user_name, email, password)
                    VALUES ('$fullName','$userName','$email',' $pass')";
                    if(mysqli_query($conn,$sql)){
                        header('location:'.SITEURL.'/admin/trangchu.php');
                    }
                    
                }
         ?>       
</div>