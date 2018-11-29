
<?php 
session_start();
 	include "config.php";
 	$controller="controller/c_home.php";
	include "remove-unicode.php";
	// $url="http://localhost:8080/thoitrang/";

	//home
	$c="";
	
	if(isset($_GET["controller"]))
		$c=$_GET["controller"];
	switch ($c) {
		case "list_sp":
			$controller="controller/c_list_sp.php";
			break;
		case "chitiet_sanpham":
			$controller="controller/c_chitiet_sanpham.php";
			break;
		case "news":
			$controller="controller/c_news.php";
			break;
		case "list_news":
			$controller="controller/c_list_news.php";
			break;
		case "lienhe":
			$controller="controller/c_lienhe.php";
			break;
		case "gioithieu":
			$controller="controller/c_gioithieu.php";
			break;
			case "bando":
			$controller="view/v_map.php";
				break;
		case "dangky":
			$controller="controller/c_dangky.php";
			break;
		case "dangnhap":
			if(!isset($_SESSION["loged_customer"]))
				
					$controller="controller/c_dangnhap.php";
				
		break;
		case "logout":
			$controller="controller/c_logout.php"; 	
			break;
		case "khachhang":
			$controller="controller/c_khachhang.php"; 	
			break;
		case "cart":
			$controller="controller/c_cart.php";
			break;
		case "dienthongtin":
			$controller="controller/c_dienthongtin.php";
			break;
		case "sp_new":
			$controller="controller/c_sp_new.php";
			break;
		case "cart_ok":
			$controller="view/v_cart_ok.php";
			break;
		case "cart_ok1":
			$controller="view/v_cart_ok1.php";
			break;
		case "chitietdonhang":
			$controller="controller/c_chitietdonhang.php";
			break;
		case "huongdan":
			$controller="controller/c_huongdan.php";
			break;
		default:
			break;

	}
 	include "view/master.php";
 ?>