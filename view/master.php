<html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</script>
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<link rel="stylesheet" href="js/jquery.simplyscroll.css" media="all" type="text/css">
<link rel="shorcut icon" type="image/x-ico" href="phpThumb_generated_thumbnailico">
<title>Shop Thời Trang</title>

<!-- Query slide show Sản phẩm chính  -->
<script type="text/javascript">
	(function($) {
		$(function() {
			$(".slideshow").simplyScroll({orientation:'vertical',customClass:'vert'});
		});
	})(jQuery);
</script>
<!-- The end query   -->

</head>

<body>
	<!-- query quảng cáo chạy 2 bên sườn web  -->
	<div class="all">
		<div id="divAdRight" style="display: block; position: fixed; margin-top:52px;">
			<a href="#"><img src="images/images_qc/1.jpg" width="120" /></a>
		</div>
		<div id="divAdLeft" style="display: block; position: fixed;margin-top:52px;">
			<a href="#"><img src="images/images_qc/2.jpg" width="120" /></a>
		</div>
		<script>
			function FloatTopDiv()
			{
				startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
				startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
				var d = document;
				function ml(id)
				{
					var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
					el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
					el.x = startRX;
					el.y = startRY;
					return el;
				}
				function m2(id)
				{
					var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
					e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
					e2.x = startLX;
					e2.y = startLY;
					return e2;
				}
				window.stayTopLeft=function()
				{
					if (document.documentElement && document.documentElement.scrollTop)
						var pY =  document.documentElement;
					else if (document.body)
						var pY =  document.body;
					if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
					ftlObj.y += (pY+startRY-ftlObj.y)/16;
					ftlObj.sP(ftlObj.x, ftlObj.y);
					ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
					ftlObj2.sP(ftlObj2.x, ftlObj2.y);
					setTimeout("stayTopLeft()", 1);
				}
				ftlObj = ml("divAdRight");
        //stayTopLeft();
        ftlObj2 = m2("divAdLeft");
        stayTopLeft();
    }
    function ShowAdDiv()
    {
    	var objAdDivRight = document.getElementById("divAdRight");
    	var objAdDivLeft = document.getElementById("divAdLeft");
    	if (document.body.clientWidth < 1050)
    	{
    		objAdDivRight.style.display = "none";
    		objAdDivLeft.style.display = "none";
    	}
    	else
    	{
    		objAdDivRight.style.display = "block";
    		objAdDivLeft.style.display = "block";
    		FloatTopDiv();
    	}
    }
</script>
<script>
	document.write("<script type='text/javascript' language='javascript'>MainContentW = 1050;LeftBannerW = 130;RightBannerW = 130;LeftAdjust =0;RightAdjust = 0;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
<!-- The end quảng cáo 2 bên sườn  -->
<!-- Thanh menu top -->
<div class="dn">
	<div class="user">  <!--Box chức năng đăng ký / đăng nhập  -->
		<ul>
			<li><?php 
				if(isset($_SESSION["loged_customer"])) 
				{
				?>
				<a href="khach-hang.html"><img  style="float:left; margin-top:10px;" src="images/images_html/login_icon.png" width="30" height="30"></a>
                <a href="khach-hang.html"> chào <?php echo $_SESSION["loged_customer"];?></a>
                <a href="index.php?controller=logout">/Đăng xuất</a>
				<?php
				}
				else 
				{
				?>
		<ul style="font-weight: bold;">
			<li><a href="dang-nhap.html"><img  style="float:left; margin-top:10px;" src="images/images_html/login_icon.png" width="30" height="30">Đăng Nhập</a></li>
			<li>|</li>
			<li><a href="dang-ky.html">Đăng Ký</a></li>
		</ul>
				<!-- <img  style="float:left; margin-top:10px;" src="images/images_html/login_icon.png" width="30" height="30">
                <a href="dang-nhap.html">Đăng nhập</a>/
                <a href="dang-ky.html">Đăng ký</a> -->
                <?php	
				}
				?> 
                </a> </li>

		</ul>
	</div>
	<div class="search">
		<form method="post">
			<div class="search-box" style="">
				<input name="ten_sp"  style="border:0px; text-align:center; line-height:23px;"type="text" placeholder="Nhập từ khóa tìm kiếm" />
				<a href="index.php?ten_sp=<?php if(isset($_POST["ten_sp"])) echo $_POST["ten_sp"];  ?>"><img  style="float:right; border-radius:0px 5px 5px 0px;"src="images/images_html/buttun-search.jpg" title="Tìm kiếm" /></a>
			</div> 
		</form>
		<?php 
			if(isset($_POST["ten_sp"]))
				$controller="controller/c_search.php"
		 ?>
	</div>
	<div class="cart">  <!-- box giỏ hàng  -->
		<a href="gio-hang.html"><img style=" margin-top:10px; border-radius:3px; float:left" src="images/images_html/icon_cart_02.jpg" height="26" width="40" title="click vào đây để xem giỏ hàng của bạn"></a>
		<span  style="text-align:center; line-height:50px; color:#FFF; margin-left:10px;" class="tb">Có <strong style="color:#F00">
			<?php 
			if(isset($_SESSION["cart"]))
			{
			 function cart_number(){
   				 $number = 0;
    			foreach($_SESSION['cart'] as $product){
      				  $number += $product['number'];
   					 }
   				 return $number;
   				 }
   				 echo cart_number();
   			}
   			else
   				echo 0;
			?>
		</strong> sản phẩm trong giỏ hàng</span>
	</div> 
	
</div>


<!-- Wrapper -->
<div class="wrapper">
	<?php
		include "view/v_header.php";
		if($controller=="controller/c_home.php")
		{
			include "view/v_slide.php";
		}
	 ?>
<div class="main">

 	<?php  
 	if ($controller=="controller/c_khachhang.php" or $controller=="controller/c_chitietdonhang.php" ) {
 		if(file_exists("view/v_chitiet_khachhang.php"))
 		include "view/v_chitiet_khachhang.php";
 	}
 	else 
 		if($controller=="controller/c_news.php" or $controller=="controller/c_list_news.php" or $controller=="controller/c_lienhe.php" 
 		or $controller=="view/v_map.php" )
 		{}
 		else
		include "controller/c_left.php";
	 ?>


	<?php
	if(file_exists($controller))
		include $controller; 
	 ?>
</div>
<!-- Footer -->
	<?php 
		include "view/v_footer.php";
	 ?>
</div>

</body>
</html>
