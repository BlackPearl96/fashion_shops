<?php 
function total($id){
		global $link;
		$result=mysqli_query($link,"select id_sanpham from tbl_sanpham where id_danhmuc=$id ");
		return mysqli_num_rows($result);
	}
	function list_sp($id,$from,$record_perpage)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_sanpham where id_danhmuc=$id order by id_sanpham desc limit $from,$record_perpage ");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
	function list_danhmuc($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc where id_danhmuc=$id");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
 ?>