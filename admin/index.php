<?php
	session_start();	
	include "../config.php";
	$c = "";
	$controller = "";
	if(isset($_GET["controller"]))
		$c = $_GET["controller"];
	switch ($c) {
		case "user":
			$controller = "controller/c_user.php";
			break;
		case "news":
			$controller = "controller/c_news.php";
			break;
		case "logout":
			unset($_SESSION["user"]);
			break;
		case "add_edit_news":
			$controller="controller/c_add_edit_news.php";
		break;
		case "news":
			$controller="controller/c_news.php";
			break;
		case "add_edit_user":
			$controller="controller/c_add_edit_user.php";
			break;
		case "customer":
			$controller="controller/c_customer.php";
			break;
		case "category_product":
			$controller="controller/c_category_product.php";
			break;
		case "add_edit_category":
			$controller="controller/c_add_edit_category.php";
			break;
		case "product":
			$controller="controller/c_product.php";
			break;
		case "add_edit_product":
			$controller="controller/c_add_edit_product.php";
			break;
		case "adv":
			$controller="controller/c_adv.php";
			break;
		case "add_edit_adv":
			$controller="controller/c_add_edit_adv.php";
			break;
		case "slide":
			$controller="controller/c_slide.php";
			break;
		case "add_edit_slide":
			$controller="controller/c_add_edit_slide.php";
			break;
		case "lienhe":
			$controller="controller/c_lienhe.php";
			break;
		case "traloi":
			$controller="controller/c_traloi.php";
			break;
		case "donhang":
			$controller="controller/c_donhang.php";
			break;
		case "chitietdonhang":
			$controller="controller/c_chitietdonhang.php";
			break;
		case "gioithieu":
			$controller="controller/c_gioithieu.php";
			break;
		default:
			$controller = "controller/c_product.php";
			break;
	}
	if(isset($_SESSION["user"])){
		if(file_exists("view/v_master.php"))
			include "view/v_master.php";
	}
	else{
		if(file_exists("controller/c_login.php"))
			include "controller/c_login.php";
	}
?>