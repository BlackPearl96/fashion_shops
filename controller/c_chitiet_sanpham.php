<?php
	include "model/m_chitiet_sanpham.php";

	if(isset($_GET["id_sanpham"]))
		$id=$_GET["id_sanpham"];
	$arr_chitiet=chitiet_sanpham($id);
	$arr_sp_lienquan=list_sp_lienquan($id);
	$id_nhomsp= $arr_sp_lienquan["id_nhomsp"];
	$arr_sp=list_sp($id_nhomsp);
	include "view/v_chitiet_sanpham.php"; 
 ?>