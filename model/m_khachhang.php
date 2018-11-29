<?php 
	function list_khachhang($username)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_khachhang where username='$username'");
		return mysqli_fetch_array($result);
	}
	function update($username,$arr)
	{
		
		global $link;
		extract($arr);
		mysqli_query($link,"UPDATE `tbl_khachhang` SET `diachi`='$diachi',`sdt`='$sdt',`fullname`='$fullname',`email`='$email' WHERE username='$username'");
	}
	function check_pass($username,$pass)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_khachhang where password='$pass' and username='$username'");
		if (mysqli_num_rows($result)>0) 
			return true;
		else 
			return false;
	}
	function update_pass($username,$pass)
	{
		
		global $link;
		
		mysqli_query($link,"UPDATE `tbl_khachhang` SET `password`='$pass' WHERE username='$username'");
	}
	function get_order($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_donhang where id_khachhang='{$id}' ORDER BY id_donhang DESC ");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
	
}
function get_order_detail($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_chitietdonhang , tbl_sanpham where tbl_sanpham.id_sanpham=tbl_chitietdonhang.id_sanpham and id_donhang=$id ");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

 ?>