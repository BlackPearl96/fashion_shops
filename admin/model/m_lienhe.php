<?php
function list_lienhe()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_lienhe ");
		$arr=array();
		while($row=mysqli_fetch_array($result))
			$arr[]=$row;
		return $arr;
	} 
function xoa($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_lienhe where id_lienhe=$id");
	}
function update($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_lienhe where id_lienhe=$id");
	return mysqli_fetch_array($result);
 }
 ?>
