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
    <?php
         $id=$_GET['myid'];
         $sql = "SELECT * FROM tbl_admin WHERE id=$id";
    
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_array($result);     
    ?>
    <h4>Chỉnh Sửa User</h4>
    <form method="POST" active="">
        <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control " name="txt_fullname" value="<?php echo $row['full_name']; ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" name="txt_username" value="<?php echo $row['user_name']; ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="txt_email" value="<?php echo $row['email']; ?>">
            
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="txt_password" value="<?php echo $row['password']; ?>">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary" name="saveuser">Save User</button>
    </form>
        <!--  xử lý backend-->
        <?php
                if(isset($_POST['saveuser'])){
                    $fullName   = $_POST['txt_fullname'];
                    $userName   = $_POST['txt_username'];
                    $email      = $_POST['txt_email'];
                    $pass       = $_POST['txt_password'];
                // truy vấn csdl
                    $sql = "UPDATE tbl_admin SET full_name='$fullName', user_name='$userName', email='$email' ,
                     password='$password' WHERE id=$id";
                    if(mysqli_query($conn,$sql)){
                        header('location:'.SITEURL.'/admin/trangchu.php');
                    }
                    
                }
         ?>       
</div>
