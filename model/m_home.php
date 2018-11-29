<?php 
	
	
	function list_thoitrang_hot()
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_sanpham where sanpham_hot=1 and id_danhmuc in(1,2,3,19,20,21,22) order by id_sanpham desc limit 0,6");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}
function list_phukien_hot()
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_sanpham where sanpham_hot=1 and id_danhmuc in(5,6,7,11,12,23,24,25,26,27) order by id_sanpham desc limit 0,6");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}
function list_mypham_hot()
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_sanpham where id_danhmuc in(14,15,16,17,18,28,29) order by id_sanpham desc limit 0,6");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}
function list_thoitrang_new()
{
	global $link;
	$result=mysqli_query($link,"SELECT id_sanpham, SUM(soluong) FROM tbl_chitietdonhang GROUP BY id_sanpham ORDER by soluong desc LIMIT 0,4");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}
function list_news()
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_tintuc ");
	$arr=array();
	while($row=mysqli_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}
function list_sp_hot($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_sanpham where id_sanpham=$id ");
	$arr=array();
	return mysqli_fetch_array($result);
}
 ?>