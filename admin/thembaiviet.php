<?php
    include("configbtl/config.php");
    include("templatebtl/header.php");
?>
<div class="container">
    <h3>Thêm Bài Viết</h3>
    <form action="">
      <table class="table text-center" >
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Chuyên Mục</th>
                <th scope="col">Thêm Bài Viết</th>
                
                
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
                                    <td><a href="addbaivietfix.php?id= <?php echo $row['id']; ?>&& name=<?php echo $row['name']; ?>"><i class="bi bi-plus-square-fill"></i></a></td>
                                    
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
                    
          </table>
      </form>  
</div>