<?php
    include("configbtl/config.php");
    include("templatebtl/header.php");
?>


    

    

    <div class="container">
        <div class="row">
        <?php
         $id=$_GET['myid'];
         $sql = "SELECT * FROM tbl_post WHERE id_post=$id";
    
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_array($result);     
    ?>
          <h2>Chỉnh Sửa Bài Viết Mới</h2>
        <form action="" method="post" enctype="multipart/formdata">
           
           <br>
           Hình Ảnh: <br>
           <input type="file" name="img" value="<?php echo $row['img']; ?>" class="form-control"> 
           <br>
           Tiêu Đề:<br>
           <input type="text" name="tittle" value="<?php echo $row['tittle']; ?>" class="form-control"> <br>
           Trích Dẫn:<br>
           <textarea name="quoet" id="quoet" cols="156" rows="5" ><?php echo $row['quote']; ?></textarea>
           <br>
           Nội Dung:<br>
           <textarea name="content" id="content" cols="156" rows="10"><?php echo $row['content']; ?></textarea>
           <br>
           <br>
           <a href="" > <input type="submit" class="btn btn-success"name="addbaiviet" value ="Thêm bài viết"></a>
           
           </form>
        <!-- xử lý back end -->
        
</div>

     
</div>
</div>
        </div>
    </div>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('content');
    </script>


  </body>

</html>