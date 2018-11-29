<?php
	include "model/m_login.php";
	
	if(isset($_POST["btn_login"]))
	{
	
		$username=mysqli_escape_string($_POST["username"]);
		$password=md5($_POST["password"]);
		if(checklogin($username,$password)==true)
		{

			$_SESSION["loged_customer"]=$username;
			
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=khachhang'>";
		}
	}
	
	
	
	include "view/v_dangnhap.php";
?>