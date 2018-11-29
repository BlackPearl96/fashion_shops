<?php
	function get_customer()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_khachhang");
		$arr=array();
		while($row=mysqli_fetch_array($result))
		{
			$arr[]=$row;
		}
		return $arr;	
	}
	
	function getcustomer($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"INSERT INTO 'tbl_khachhang'('username', 'password', 'diachi', 'sdt', 'fullname', 'email') VALUES ('$username','$password','$diachi',$sdt,'$fullname','$email')");
	}
	
	function check_username($arr)
	{
		global $link;
		$username=$arr["username"];
		$result=mysqli_query($link,"select * from tbl_khachhang where username='$username'");
		$arr=array();
		while($row=mysqli_fetch_array($result))
		{
			$arr[]=$row;
		}
		return $arr;		
	}
	
	function check_email($arr)
	{
		global $link;
		$email=$arr["email"];
		$result=mysqli_query($link,"select * from tbl_khachhang where email='$email'");
		$arr=array();
		while($row=mysqli_fetch_array($result))
		{
			$arr[]=$row;
		}
		return $arr;			
	}
?>