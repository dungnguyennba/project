<?php
    include("configpage/configpage.php");
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FPT-School</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="testindex.css" />

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
  </head>
  <body>
    

    <!--  start : navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <img src="images/img-logo-01.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Thông Tin Tuyển Sinh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="chuong_trinh_dao_tao.php">Chương Trình Đào Tạo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Liên Hệ</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!--  end : navbar -->

    <!--  start : slide only -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slide1.png" class="d-block w-100" alt="slide1" />
        </div>
        <div class="carousel-item">
          <img src="images/slide1.png" class="d-block w-100" alt="slide2" />
        </div>
        <div class="carousel-item">
          <img src="images/slide1.png" class="d-block w-100" alt="slide3" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--  end : slide only -->

    <!--  Start : chương trình đào tạo-->
   
    

    <div class="chuong_trinh_dao_tao">
      <h2 class="text-center text-white">
        Chương Trình Đào Tạo - Bậc Tiểu Học
      </h2>
      <p class="text-center text-white">
        Tổng quan chương trình học tại hệ thống Trường Tiểu học và THCS FPT
      </p>
      <hr class="text-white" />
      <div class="container">
        <div class="row">
        <?php
    
     $sql = "SELECT * FROM tbl_post";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
     $i=1;
     $dem=0;
     while($row = mysqli_fetch_assoc($result)){
       $dem++;
       if($dem<=3)
       {
        echo"<div class=\"col-xs-12 col-md-4 col-lg-4\">
        <img class=\"img img-reponsive\" src=\"images/".$row['img']."\" alt=\"ảnh3\" />
        <a href=\"chuong_trinh_dao_tao.php\" class=\"text-white text-decoration-none\"><h4>Phát Triển Tiếng Anh Ứng Dụng</h4></a>
        <p class=\"text-white\">".$row['tittle']."
        </p>
      </div>
";
       }
       else{
         break;
       }
     }
    }
    ?>
          
        </div>
        
          
      </div>
    </div>
    <!--  End : chương trình đào tạo-->

    <!--  start : tin tức thông báo-->
    <div class="tin_tuc_thong_bao">
      <h2 class="text-center">Tin Tức - Thông báo</h2>
      <p class="text-center">
        Tin tức mới nhất về các hoạt động của FPT SCHOOLS
      </p>
      <hr class="text-black" />
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4 col-lg-4">
            <img
              class="img img-reponsive"
              src="images/stem.jpg"
              alt="ảnh3"
            />
            <h4 class="text-center">
              NĂM HỌC MỚI BẮT ĐẦU TRONG ĐẠI DỊCH, BỐ MẸ NÊN CHUẨN BỊ GÌ CHO CON?
            </h4>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4">
            <img
              class="img img-reponsive"
              src="images/stem.jpg"
              alt="ảnh2"
            />
            <h4 class="text-center">
              NHỮNG CON SỐ ĐÁNG NHỚ TẠI LỄ BẾ GIẢNG NĂM HỌC 2020-2021
            </h4>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4">
            <img
              class="img img-reponsive"
              src="images/stem.jpg"
              alt="ảnh3"
            />
            <h4 class="text-center">
              HỌC SINH VIẾT TÂM THƯ GỬI FPT SCHOOLS XIN NHẬP HỌC LỚP 9
            </h4>
          </div>
        </div>
      </div>
      <!--  End : tin tức thông báo-->

      <!--  start : đăng ký dự thi tuyển sinh-->
      <div class="dang_ky_tuyen_sinh border">
        <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-8 col-lg-8">
                <p class="text_title text-white">
                  ĐĂNG KÝ DỰ THI TUYỂN SINH NĂM HỌC 2021-2022
                </p>
                <p class="fs-1 text-white">ĐĂNG KÝ NGAY!</p>
                
              </div>

              <div class="col-xs-12 col-md-4 col-lg-4 border bg-white fix_form">
                <div class="header_form">
                  <p class="title_form text-center text-primary">
                    Quý phụ huynh vui lòng điền đầy đủ thông tin. Bộ phận tư vấn
                    tuyển sinh sẽ liên hệ lại trong thời gian sớm nhất. Trân
                    trọng!
                  </p>
                  <p class="title2_form text-center text-primary">
                    - FPT Schools: Môi trường học tập hạnh phúc -
                  </p>
                </div>

                <div class="body_form">
                  <form action="" method="POST">
                      <input type="text" class="form-control text_fix" name="txt_phuhuynh" placeholder="Họ Tên Phụ Huynh*" />
  
                      <input type="text" class="form-control text_fix" name="txt_sodienthoai" placeholder="Số Điện Thoại*" />

                      <input type="text" class="form-control text_fix" name="txt_hocsinh" placeholder="Họ Tên Học Sinh*" />

                      <input type="text" class="form-control text_fix" name="txt_ddmmyy" placeholder="Ngày/Tháng/Năm*" />
                    <div style="display: flex; justify-content: space-around">
                      <button type="submit" class="btn btn-primary fw-bold fix_btn" name="addthongtin">GỬI THÔNG TIN</button>
                    </div>
                  </form>

                  <?php
                if(isset($_POST['addthongtin'])){
                    $fullName   = $_POST['txt_phuhuynh'];
                    $userName   = $_POST['txt_sodienthoai'];
                    $email      = $_POST['txt_hocsinh'];
                    $pass       = $_POST['txt_ddmmyy'];
                // truy vấn csdl
                    $sql = "INSERT INTO tbl_duthituyensinh (phu_huynh, So_dien_thoai, hoc_sinh, ngay_thang_nam)
                    VALUES ('$fullName','$userName','$email',' $pass')";
                    
                    mysqli_query($conn,$sql);
                }
         ?>  
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--  end : đăng ký dự thi tuyển sinh-->

      <!--  Start : giaovien-câuchuyen-->
      <div class="doingu_giaovien">
        <h2 class="text-center">ĐỘI NGŨ GIÁO VIÊN</h2>
        <p class="text-center">
          Đội ngũ giáo viên xuất sắc của FPT SCHOOLS
        </p>
        <hr>
        <div class="container">
          <!-- hàng1 -->
          <div class="row">
            <!-- cột 1 -->
            <div class="col-xs-12 col-md-6 col-col-lg-6 ">
              <div class="row">
                <div class="col-4">
                <img  class="img-reponsive" src="images/gv1.jpg" alt="">
                </div>
                <div class="col-8">
                  <p class="fw-bold">Cô Hoàng Thuỳ Linh</p>
                  <hr>
                  <p>Tổ trưởng khối STEM – Tin học; Trình độ: Thạc sỹ; Kinh nghiệm: 13 năm; 
                        Thành tích: Giải Nhất Hội thi Giảng viên dạy...
                        
                  </p>
                  <a href="" class="text-decoration-none">Xem thêm >></a>
                </div>
              </div>
            </div>
           <!-- cột1 -->
            <!-- cột2 -->
            <div class="col-xs-12 col-md-6 col-col-lg-6 ">
              <div class="row ">
                <div class="col-4">
                <img  class="img-reponsive" src="images/gv1.jpg" alt="">
                </div>
                <div class="col-8">
                  <p class="fw-bold">Cô Hoàng Thuỳ Linh</p>
                  <hr>
                  <p>Tổ trưởng khối STEM – Tin học; Trình độ: Thạc sỹ; Kinh nghiệm: 13 năm; 
                        Thành tích: Giải Nhất Hội thi Giảng viên dạy...
                        
                  </p>
                  <a href="" class="text-decoration-none">Xem thêm >></a>
                  
                </div>
              </div>
            </div>
            <!-- cột2 -->

          </div>
          <!-- hàng1 -->

          <!-- hàng2 -->
          <div class="row  ">
            <!-- cột 1 -->
            <div class="col-xs-12 col-md-6 col-col-lg-6 ">
              <div class="row">
                <div class="col-4">
                  <div class="">
                        <img  class="img-reponsive" src="images/gv1.jpg" alt="">
                  </div>
                </div>
                <div class="col-8">
                  <p class="fw-bold">Cô Hoàng Thuỳ Linh</p>
                  <hr>
                  <p>Tổ trưởng khối STEM – Tin học; Trình độ: Thạc sỹ; Kinh nghiệm: 13 năm; 
                        Thành tích: Giải Nhất Hội thi Giảng viên dạy...   
                        
                  </p>
                  <a href="" class="text-decoration-none">Xem thêm >></a>
                </div>
              </div>
            </div>
           <!-- cột1 -->
            <!-- cột2 -->
            <div class="col-xs-12 col-md-6 col-col-lg-6 ">
              <div class="row">
                <div class="col-4">
                <img  class="img-reponsive" src="images/gv1.jpg" alt="">
                </div>
                <div class="col-8">
                  <p class="fw-bold">Cô Hoàng Thuỳ Linh</p>
                  <hr>
                  <p>Tổ trưởng khối STEM – Tin học; Trình độ: Thạc sỹ; Kinh nghiệm: 13 năm; 
                        Thành tích: Giải Nhất Hội thi Giảng viên dạy...
                  </p>
                  <a href="" class="text-decoration-none">Xem thêm >></a>
                </div>
              </div>
            </div>
            <!-- cột2 -->

          </div>
          <!-- hàng2 -->
        </div>
      </div>
    <!--  end : giaovien-câuchuyen--->

    <!--  start : Thư Viện Ảnh--->
    <div class="thu_vien_anh">
      <h2 class="text-center">THƯ VIỆN ẢNH</h2>
        <p class="text-center">
          Những khoảng khắc được lưu lại từ hoạt động của trường
        </p>
        <hr>
      <div class="container">
        <div class="row"></div>
      </div>
    </div>
    <!--  start : Thư Viện Ảnh--->

    <!--  start: footer--->
<?php
    
    include("templatepage/footerpage.php");
?>