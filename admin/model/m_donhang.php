<?php 
function get_customer($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_khachhang where id_khachhang='{$id}'");
	$row=mysqli_fetch_array($result);
	return $row;
}
function get_detail_order($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_chitietdonhang inner join tbl_sanpham on tbl_sanpham.id_sanpham=tbl_chitietdonhang.id_sanpham where id_donhang={$id}");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}
function get_order($key,$from,$record_perpage)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_donhang where tinhtrang in ({$key}) order by id_donhang desc limit $from,$record_perpage   ");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

function total_record($key)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_donhang where tinhtrang in ($key) ");
	$arr=mysqli_num_rows($result);
	return $arr;
}

function xuly_donhang($str_id)
{
	global $link;
	mysqli_query($link,"update tbl_donhang set tinhtrang='1' where id_donhang in ({$str_id})");
}
function get_khachhang($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_khachhang where id_khachhang=$id");	
	return mysqli_fetch_array($result);
}
?>