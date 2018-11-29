<?php 
		function total(){
		global $link;
		$result=mysqli_query($link,"select id_khachhang from tbl_khachhang");
		return mysqli_num_rows($result);
	}
	function list_customer($from,$record_perpage)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_khachhang limit $from,$record_perpage");
		$arr=array();
		while($row=mysqli_fetch_array($result))
			$arr[]=$row;
		return $arr;
	}
	function delete($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_khachhang where id_khachhang=$id");
	}
	
 ?>