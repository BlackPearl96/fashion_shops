<?php 
	include "model/m_dienthongtin.php";
	include "c_cart.php";
	
	if(isset($_SESSION["loged_customer"]))
		{
			$arr_khachhang=list_khachhang($_SESSION["loged_customer"]);
			if(isset($_POST["gui"]))
			{
				
				$getkhachhang = list_khachhang($_SESSION["loged_customer"]);
				$id_khachhang=$getkhachhang["id_khachhang"];
				add_order1($id_khachhang);
				echo "<meta http-equiv='refresh' content='0; url=index.php?controller=cart_ok'>";
			}
			
				
		}
		else
		{
			if(isset($_POST["gui"]))
			{
				
				$arr_new_customer=array();
				$arr_new_customer["fullname"]=mysqli_real_escape_string($_POST["fullname"]);
				$arr_new_customer["diachi"]=mysqli_real_escape_string($_POST["diachi"]);
				$arr_new_customer["email"]=mysqli_real_escape_string($_POST["email"]);
				$arr_new_customer["sdt"]=mysqli_real_escape_string($_POST["sdt"]);
				add_order($arr_new_customer);
				unset($_SESSION["cart"]);
				echo "<meta http-equiv='refresh' content='0; url=index.php?controller=cart_ok1'>";
			}
		}
	include "view/v_dienthongtin.php";
 ?>