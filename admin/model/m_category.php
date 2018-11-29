<?php 
	function add_danhmuc($ten_danhmuc,$id_nhomsp)
	{
		global $link;
		mysqli_query($link,"insert into tbl_danhmuc(id_nhomsp,ten_danhmuc) values('$id_nhomsp','$ten_danhmuc')");
	}
	function list_danhmuc($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc where id_nhomsp=$id");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	} 
	function list_alldanhmuc()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	} 
	function list_nhomsp()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_nhomsanpham ");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	} 
	function get_nhomsp($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_nhomsanpham where id_nhomsp=$id");
		return mysqli_fetch_array($result);
	}
	function xoa($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_danhmuc where id_danhmuc=$id");
	}
	function update($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc where id_danhmuc=$id");
		return mysqli_fetch_array($result);
	}
	function edit($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"update tbl_danhmuc set ten_danhmuc='$ten_danhmuc',id_nhomsp=$id_nhomsp where id_danhmuc=$id");
	}
 ?>