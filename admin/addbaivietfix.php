<?php
    include("configbtl/config.php");
    include("templatebtl/header.php");
?>


    

    

    <div class="container">
        <div class="row">
          <h2>Thêm Bài Viết Mới| <?php echo $_GET['name']; ?></h2>
        <form action="formadd.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/formdata">
           
           <br>
           Hình Ảnh: <br>
           <input type="file" name="img" value="" class="form-control"> 
           <br>
           Tiêu Đề:<br>
           <input type="text" name="tittle" value="" class="form-control"> <br>
           Trích Dẫn:<br>
           <textarea name="quoet" id="quoet" cols="156" rows="5"></textarea>
           <br>
           Nội Dung:<br>
           <textarea name="content" id="content" cols="156" rows="10"></textarea>
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