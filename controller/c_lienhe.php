<?php 
 include "model/m_lienhe.php";
 if(isset($_SESSION["loged_customer"])) 
 	$arr_khachhang=list_khachhang($_SESSION["loged_customer"]);
	$now=getdate();
	$currentTime = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
	if(isset($_POST["name"]))
	{
		$captcha=$_POST["captcha"];
		if($captcha==$_SESSION["captcha"])
		{
		$arr=array();
		$arr["hoten"]=$_POST["name"];
		$arr["email"]=$_POST["email"];
		$arr["message"]=$_POST["message"];
		$arr["ngaydang"]=$currentTime;
		insert($arr);
		
		}
		else 
		{
			echo "nhập sai captcha";
		}
	}
	$captcha_new=rand(1111,9999);
	$_SESSION["captcha"]=$captcha_new;
	include "view/v_lienhe.php";
 ?>
 