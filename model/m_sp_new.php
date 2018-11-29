<?php 
function list_sp()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_sanpham  order by id_sanpham desc limit 0,24 ");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
 ?>