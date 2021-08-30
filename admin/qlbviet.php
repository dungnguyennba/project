<<?php
    include("configbtl/config.php");
    include("templatebtl/header.php");
    
?>
  
<div class="container">

                    
       <h4>Quản Lý Bài Viết  </h4>
        <br>
        <a href="thembaiviet.php" > <input type="button" class="btn btn-success" value ="Thêm bài viết"></a>
</div>
<div class="container">
    <div >
    <form action="" >
            <table class="table">
              <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Tiêu Đề</th>
                <th scope="col">Trích Dẫn</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Chỉnh Sửa</th>
                <th scope="col">Xoá Bài viết</th>

            </tr>
              </thead>
              <?php
                $sql = "SELECT * FROM tbl_post";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
                                <tr>
                                    <th scope="row "><?php echo $i; ?></th>
                                    <td> <?php echo $row['img']; ?> </td>
                                    <td> <?php echo $row['tittle']; ?></td>
                                    <td> <?php echo $row['quote']; ?></td>
                                    <td> <?php echo $row['content']; ?></td>
                                    <td><a href="edit_baiviet.php?myid=<?php echo $row['id_post']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_baiviet.php?myid=<?php echo $row['id_post']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
            </table>
        </form>
    </div>
</div>