<?php
      include("configbtl/config.php");
      
      if(isset($_POST['addbaiviet'])){
        $id   = $_GET['id'];
        $a   = $_POST['img'];
        $b   = $_POST['tittle'];
        $c   = $_POST['quoet'];
        $d   = $_POST['content'];
      
        
    // truy vấn csdl
    $sql = "INSERT INTO tbl_post VALUES (NULL, '$id', '$a', '$b', '$c', '$d')";
    if(mysqli_query($conn,$sql)){
      header('location:'.SITEURL.'/admin/qlbviet.php');
  }
    }
                    
                // truy vấn csdl
                    
                    
                   

                   
                
?>