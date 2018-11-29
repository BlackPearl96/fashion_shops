<?php 
	function chitiet_sanpham($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_sanpham where id_sanpham=$id");
		return mysqli_fetch_array($result);
	}
	function list_sp_lienquan($id)
	{
		global $link;
		$result=mysqli_query($link,"select id_nhomsp from tbl_nhomsanpham where id_nhomsp=(select id_nhomsp from tbl_danhmuc where id_danhmuc=(select id_danhmuc from tbl_sanpham where id_sanpham=$id))");
		return mysqli_fetch_array($result);
	}
	function list_sp($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_sanpham where id_danhmuc in (select id_danhmuc from tbl_danhmuc where id_nhomsp=$id) order by id_sanpham desc limit 0,12");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
 ?>