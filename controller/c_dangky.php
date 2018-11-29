<?php
	include ('model/m_dangky.php');

	if (isset($_POST['username']))
	{
		$arr = array();
		$arr["username"]=mysqli_escape_string($_POST['username']);
		$arr["password"]=mysqli_escape_string($_POST['password']);
		$arr["diachi"]=mysqli_escape_string($_POST['diachi']);
		$arr["email"]=mysqli_escape_string($_POST['email']);
		$arr["sdt"]=mysqli_escape_string($_POST['sdt']);
		$arr["fullname"]=mysqli_escape_string($_POST['fullname']);
		$check_username=count(check_username($arr));
		$check_email=count(check_email($arr));

		if($check_email==0 && $check_username==0)
		{
			getcustomer($arr);
			echo "<script language='javascript' > alert('đăng kí thành công'); </script>";	
			
		}
		else
		{
			if($check_username>0)
			{
			echo "<script language='javascript' > alert('Tên này đã được sử dụng'); </script>";	
			}
			if($check_email>0)
			{
			echo "<script language='javascript' > alert('Email này đã được sử dụng'); </script>";	
			}
		}
		
		
		
}
include "view/v_dangky.php";
?>


