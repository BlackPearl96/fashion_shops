<?php 
function total($ten_sp){
		global $link;
		$result=mysqli_query($link,"select id_sanpham from tbl_sanpham where ten_sanpham like '%".$ten_sp."%' ");
		return mysqli_num_rows($result);
	}
	function list_sp($ten_sp,$from,$record_perpage)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_sanpham where ten_sanpham like '%".$ten_sp."%'  order by id_sanpham desc limit 0,20 ");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
 ?>