<?php
	function list_slide()
	{
		global $link;
		$arr = array();
		$result = mysqli_query($link," select * from tbl_slide");
		while($row=mysqli_fetch_array($result))
		{
			$arr[]=$row;	
		}
		return $arr;
	}
	function insert($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"INSERT INTO `tbl_slide`(`anh`, `vitri`) VALUES ('$img','$thutu')"); 
	}
	function xoa($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_slide where id_slide=$id");
	}
	function update($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_slide where id_slide=$id");
		return mysqli_fetch_array($result);
	}
	
	function edit($arr)
	{
		global $link;
		extract ($arr);
		mysqli_query($link,"UPDATE `tbl_slide` SET `anh`='$img' WHERE id_slide=$id");
	}
?>

