<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/master.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script language="javascript" src="js/jquery-1.11.3.min.js"></script>
<script language="javascript" src="morris.js-0.5.1/morris.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="color:#FFF" class="navbar-brand" href="#">Trang quản trị </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav ">
             <li><a href="index.php?controller=product"><span>Sản Phẩm</span></a></li>
            <li><a href="index.php?controller=category_product"><span>Danh Mục Sản Phẩm</span></a></li>
            <li><a href="index.php?controller=news"><span>Tin Tức</span></a></li>
            <li><a href="index.php?controller=adv"><span>Quảng Cáo</span></a></li>
            <li><a href="index.php?controller=donhang"><span>Đơn Hàng</span></a></li>
            <li><a href="index.php?controller=customer"><span>Khách Hàng</span></a></li>
            <li><a href="index.php?controller=user"><span>Người Dùng</span></a></li>
            <li><a href="index.php?controller=slide"><span>Slide</span></a></li>
            <li><a href="index.php?controller=lienhe"><span>Liên Hệ</span></a></li>
          <ul class="nav navbar-nav navbar-right">
            <li><a style="color:#FC0">Xin chào <?php echo $_SESSION["user"]; ?></a></li>
             <li><a href="index.php?controller=logout">Đăng Xuất</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div style="margin-top:60px"></div>
     
   <div class="row">
    <div class="col-md-2" style="margin-left:20px">
      <div class="example">
              <ul class="nav nav-pills navbar-default nav-stacked">
                <li><a href="index.php?controller=category_product"><span  class="glyphicon glyphicon-list-alt"></span> Danh mục sản phẩm</a></li>
                <li><a href="index.php?controller=product"><span class="glyphicon glyphicon-chevron-down"></span> Sản phẩm </a></li>
                <li><a href="index.php?controller=news"><span class="glyphicon glyphicon-book"></span> Tin tức</a></li>
                <li><a href="index.php?controller=user"><span class="glyphicon glyphicon-user"></span> Người dùng</a></li>
                <li><a href="index.php?controller=customer"><span class="glyphicon glyphicon-user"></span> Khách hàng</a></li>
                <li><a href="index.php?controller=donhang"><span class="glyphicon glyphicon-shopping-cart"></span> Đơn hàng</a></li>
                <li><a href="index.php?controller=adv"><span class="glyphicon glyphicon-facetime-video"></span> Quảng cáo</a></li>
                <li><a href="index.php?controller=slide"><span class="glyphicon glyphicon-picture"></span> Slide</a></li>
                <li><a href="index.php?controller=lienhe"><span class="glyphicon glyphicon-earphone"></span> Liên hệ</a></li>
                <li><a href="index.php?controller=gioithieu"><span class="glyphicon glyphicon-pushpin"></span> Giới thiệu</a></li>
                <li><a href="index.php?controller=gioithieu"><span class="glyphicon glyphicon-check"></span> Hướng dẫn mua hàng </a></li>
                <li><a href="index.php?controller=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất </a></li>
               
                
              </ul>
            </div>  
        </div> 
        <div class="col-md-9">
              <?php 
                 if(file_exists($controller))
                 include $controller;
               ?>
         </div>
</div>
</div>
    </div>
    

    
</body>
</html>