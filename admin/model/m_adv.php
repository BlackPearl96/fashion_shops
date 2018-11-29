<?php 
	function list_adv()
	{
		global $link;
		$arr=array();
		$result=mysqli_query($link,"select * from tbl_quangcao");
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
	function insert($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"insert into tbl_quangcao(ten_quangcao,vitri,anh,link) values('$ten','$vitri','$img','$url')");
	}
	function xoa($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_quangcao where id_quangcao=$id");
	}
	function update($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_quangcao where id_quangcao=$id");
		return mysqli_fetch_array($result);
	}
	function edit($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"UPDATE `tbl_quangcao` SET `ten_quangcao`='$ten',`anh`='$img',`vitri`='$vitri',`link`='$url' WHERE id_quangcao=$id ");
	}
 ?>