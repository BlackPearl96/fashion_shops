<?php
	include "model/m_cart.php";
	
	$act = "";
	if(isset($_GET["act"])){
		$act = $_GET["act"];
		switch ($act) {
			case 'add':
				$id = $_GET["id_sanpham"];
				cart_add($id);
				echo "<meta http-equiv='refresh' content='0; url=gio-hang.html'>";
				break;	
			case 'delete':
				$id = $_GET["id_sanpham"];
				cart_delete($id);
				echo "<meta http-equiv='refresh' content='0; url=gio-hang.html'>";
				break;	
			case "update":
				foreach($_SESSION["cart"] as $key=>$value){
					$number = $_POST["product_".$key];
					
					cart_update($value["id_sanpham"], $number);
					echo "<meta http-equiv='refresh' content='0; url=gio-hang.html'>";
				}
				break;
			case 'destroy':
				cart_destroy();
				echo "<meta http-equiv='refresh' content='0; url=gio-hang.html'>";
				break;
			default:
				# code...
				break;
		}
	}
	//----------
	include "view/v_cart.php";
?>