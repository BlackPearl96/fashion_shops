
	<?php 
include "model/m_donhang.php";
$id=0;
if(isset($_GET["id"]))
{
	if(is_numeric($_GET["id"]))
	$id=$_GET["id"];
	$get_detail_order=get_detail_order($id);

	
	if(is_numeric($_GET["id_khachhang"]))
	$id=$_GET["id_khachhang"];
	$get_khachhang=get_khachhang($id);	

}

	
include "view/v_chitietdonhang.php";
?>