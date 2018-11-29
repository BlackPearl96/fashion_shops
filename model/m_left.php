<?php  function list_nhomsp()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_nhomsanpham");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
	function get_danhmuc($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc where id_nhomsp=$id");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
?>