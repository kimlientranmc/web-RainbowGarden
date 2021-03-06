<?php 
@session_start();

include "php/connectDB.php";
$db=new DataAccessHelper;
$db->connect();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rainbow Garden</title>
     <link rel="shortcut icon" href="img/logo.ico" />

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
       <link href="css/custom.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  </head>
  <style type="text/css">
    a
    { color: #4b9249 ;

    }
      a:hover
    {
      color: #a1e6a1 !important;
    }
  </style>

  <body>

    <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand GreenBrand" href="index.php"><img src="img/logobn.png">RainBow Garden</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

           <a class="nav-link" href="caymini.php">Cây mini</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="caykhongkhi.php" >Cây không khí</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cayhandmade.php" >Cây handmade</a>
        </li>

        <li>
          <form class="input-with-submit header-search" method="GET" >
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm thứ gì đó?" name="tukhoa">
            <span class="input-group-button">
              <button class="btn btn-default" style="background-color: #4b9249" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="lienhe.php" style="color: #a1e6a1 !important">
            Liên hệ
          </a>
        </li>
        <li style="width: 40px !important; height: 40px; padding-left: 3px;">
          <span class="my-cart-icon" ">
            <span class="navRbcart">
              <i class=" fa fa-shopping-cart shopping_bg" aria-hidden="true"></i>
            </span>
            <span class="badge badge-notify my-cart-badge"></span>
            
          </span>   
        </li>
        
        <li class="dropdown navRbaccount">
          <a class=" fn-bran-light" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user" >
            <?php 
            if(!isset($_SESSION['customer'])&&!isset($_SESSION['account']))
            {
              ?>
              <li><a href="admin/pages/login.html"><i class="fa fa-sign-in fa-fw"></i> Đăng nhập</a>
              </li>
              <li><a href="#"><i class="fa fa-user fa-fw"></i> Tạo tài khoản</a>
              </li>

              <?php
            }
            if(isset($_SESSION['customer']))
            {
              ?>
              <li><a href="#"><i class="fa fa-user fa-fw"></i> Tài khoản</a>
              </li>
              <li class="divider"></li>
              <li><a href="php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
              </li>
              <?php
            }
            if(isset($_SESSION['account']))
            {
              ?>
              <li><a href="admin/pages/index.php"><i class="fa fa-gear fa-fw"></i> Đến trang admin</a>
              </li>
              <li><a href="#"><i class="fa fa-user fa-fw"></i>Tài khoản</a>
              </li>
              
              <li class="divider"></li>
              <li><a href="php/logout.php"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
              </li>
              <?php
            }
            ?>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <br>
     <h1 class="GreenBrand">RainBow Garden
        <small style="font-family: Arial">Liên hệ</small>
      </h1>


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active"">Liên hệ</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.228577192645!2d106.80154771502109!3d10.870211692257952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587ba04377%3A0x4ea5c6ca79f1ff59!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbg!5e0!3m2!1svi!2s!4v1508070633981" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4" style="font-family: 'Muli', sans-serif;">
          <h3>Địa chỉ liên lạc</h3>
          <p>
            Khu phố 6, p. Linh Trung
            <br>q. Thủ Đức, TP.HCM
            <br>
          </p>
          <p>
            Liên hệ: 1800.1555
          </p>
          <p>Email: 
            
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p title="Hours">Thời gian làm việc : Thứ 2 - Chủ Nhật: 8:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Để lại tin nhắn cho chúng tôi</h3>
          <form  method="POST">
            <div class="control-group form-group">
              <div class="controls">
                <label>Họ tên:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Số điện thoại:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nội dung:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            
            <!-- For success/fail messages -->
            <input type="submit" class="btn success" name="btn_submit" value="Gửi" >
            
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white" style="color: #a1e6a1 !important">Rainbow Graden là nhóm các bạn trẻ năng động được thành lập từ môn Phát triển ứng dụng web. Với mới mong muốn mang đến cuộc sống nhiều màu xanh hơn. </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
<?php
  if(isset($_POST["btn_submi"]))
  {
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $message=$_POST['message'];

      $sql="INSERT INTO `feedback`( `name`, `phone`, `email`, `content`) VALUES ('$name','$phone','$email','$message')";

  }
?>