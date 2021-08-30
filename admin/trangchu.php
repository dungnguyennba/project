<?php
    include("configbtl/config.php");
    include("templatebtl/header.php");
?>

    <!-- end: nabar -->
    <!-- start: thôgn tin tuyển sinh  -->
    <div class="container">
        <h4>Đăng Ký Dự Thi Tuyển Sinh Năm Học 2021-2022</h4>
        <br>
      <form action="">
      <table class="table text-center" >
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ tên phụ huynh</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Họ tên học sinh</th>
                <th scope="col">Ngày/Tháng/Năm sinh</th>
              </tr>
            </thead>
            <?php
                $sql = "SELECT * FROM tbl_duthituyensinh";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
                                <tr>
                                    <th scope="row "><?php echo $i; ?></th>
                                    <td> <?php echo $row['phu_huynh']; ?> </td>
                                    <td> <?php echo $row['So_dien_thoai']; ?></td>
                                    <td> <?php echo $row['hoc_sinh']; ?></td>
                                    <td> <?php echo $row['ngay_thang_nam']; ?></td>
                                    
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
          </table>
      </form>  

      
        <br>
        <h4>Quản Lý Chuyên Mục</h4> <br>
        <a href="add_chuyenmuc.php" class="btn btn-success ">Thêm Chuyên Mục</a>
      <form action="">
      <table class="table text-center" >
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Chuyên Mục</th>
                <th scope="col">Chỉnh Sửa</th>
                <th scope="col">Xoá Chuyên Mục</th>
                
              </tr>
            </thead>
            <?php
                $sql = "SELECT * FROM tbl_category";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
                                <tr>
                                    <th scope="row "><?php echo $i; ?></th>
                                    <td> <?php echo $row['name']; ?> </td>
                                    <td><a href="edit_chuyenmuc.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_chuyenmuc.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
          </table>
      </form>  
        
         <br>
        <h4>Đăng Ký Dự Thi Tuyển Sinh Năm Học 2021-2022</h4><br>
        <a href="add_username.php" class="btn btn-success ">Add New User</a> 
       
        <br>
        <form  action="">
        <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</tsh>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM tbl_admin";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
                                <tr>
                                    <th scope="row "><?php echo $i; ?></th>
                                    <td> <?php echo $row['full_name']; ?> </td>
                                    <td> <?php echo $row['user_name']; ?></td>
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['password']; ?></td>
                                    <td><a href="edit_user.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_user.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
                
        </table>
        </form>

        
        
    </div>
    <!-- end: thôgn tin tuyển sinh  -->
  

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    
</body>

</html>