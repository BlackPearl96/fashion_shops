<?php 
	function list_gioithieu()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_thongtin where id_thongtin=1");
		return mysqli_fetch_array($result);
	}
	function list_huongdan()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_thongtin where id_thongtin=2");
		return mysqli_fetch_array($result);
	}
 ?>