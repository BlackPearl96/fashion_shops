<?php 
function total(){
		global $link;
		$result=mysqli_query($link,"select id_tintuc from tbl_tintuc");
		return mysqli_num_rows($result);
	}
	function list_news($from,$record_perpage)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_tintuc limit $from,$record_perpage ");
		$arr=array();
		while($row=mysqli_fetch_array($result))
			$arr[]=$row;
		return $arr;
	}
	function news($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_tintuc where id_tintuc=$id");
		return mysqli_fetch_array($result) ;
	}
 ?>