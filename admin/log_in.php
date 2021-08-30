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
    <h4>Đăng Nhập</h4>
    <form method="POST" active="">
        
        <br>
        <div class="form-group ">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" name="txt_username" placeholder="Enter username">
        </div>
        
        <br>
        <div class="form-group ">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="txt_password" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="dang_nhap">ĐĂNG NHẬP</button>
    </form>
</div>