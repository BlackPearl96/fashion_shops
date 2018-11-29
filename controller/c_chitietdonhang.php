<?php
	include "model/m_khachhang.php";
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$arr_chitiet=get_order_detail($id);
	}
	include "view/v_chitietdonhang.php";
 ?>