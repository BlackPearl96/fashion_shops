<?php 
	function total()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_user");
		return mysqli_num_rows($result);
	}
	function list_user($from,$record_page)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_user limit $from,$record_page");
		$arr=array();
		while($rows=mysqli_fetch_array($result))
			$arr[]=$rows;
		return $arr;
	}
	function add($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"insert into tbl_user(c_username,c_password,c_fullname) values('$c_username','$c_password','$c_fullname')");
	}
	function xoa($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_user where pk_user_id='$id'");
		
	}
	function edit($data)
	{
		extract($data);
		global $link;
		mysqli_query($link,"update tbl_user set c_username='$c_username',c_password='$c_password',c_fullname='$c_fullname' where pk_user_id=$id");
	}
	 function update($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_user where pk_user_id='$id'");
		return mysqli_fetch_array($result);
	}
 ?>