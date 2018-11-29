<?php 
function total(){
		global $link;
		$result=mysqli_query($link,"select id_tintuc from tbl_tintuc");
		return mysqli_num_rows($result);
	}
	function list_news($from,$record_perpage)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_tintuc limit $from,$record_perpage");
		$arr=array();
		while($row=mysqli_fetch_array($result))
			$arr[]=$row;
		return $arr;
	}
	function insert($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"INSERT INTO tbl_tintuc(tieude,noidung,hinhanh,ngaydang,hot) VALUES ('$tieude','$noidung','$img','$ngaydang','$hot')");
	}
	function xoa($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_tintuc where id_tintuc='$id'");
		
	}
	function xoaimg($id)
	{
		global $link;
		$result=mysqli_query($link,"select img from tintuc where id_tintuc='$id'");
		$arr=array();
		$arr=$result;
		return $arr;
	}
	function edit($data)
	{
		extract($data);
		global $link;
		mysqli_query($link,"update tbl_tintuc set tieude='$tieude',noidung='$noidung',hinhanh='$img',ngaydang='$ngaydang' where id_tintuc='$id'");
	}
 	function update($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_tintuc where id_tintuc='$id'");
		return mysqli_fetch_array($result);
	}
	function delete_all_news($str_id)
{
	mysqli_query($link,"delete from tbl_tintuc where id_tintuc in ({$str_id})");	
}
?>