<?php 
	function update()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_thongtin where id_thongtin=1");
		return mysqli_fetch_array($result);
	}
	function update1()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_thongtin where id_thongtin=2");
		return mysqli_fetch_array($result);
	}
	function insert($noidung,$noidung1)
	{
		global $link;
		mysqli_query($link,"UPDATE `tbl_thongtin` SET `tieude`='giới thiệu',`noidung`='$noidung' WHERE id_thongtin=1");
		mysqli_query($link,"UPDATE `tbl_thongtin` SET `tieude`='hướng dẫn mua hàng',`noidung`='$noidung1' WHERE id_thongtin=2");
		
	}
 ?>