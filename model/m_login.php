<?php
function checklogin($username,$password)
{
	global $link;
	$checkusername=mysqli_query($link,"select username from tbl_khachhang where username='$username'");
	if(mysqli_num_rows($checkusername)>0)
	{
		$checkpassword=mysqli_query($link,"select password from tbl_khachhang WHERE password='$password';");
		if(mysqli_num_rows($checkpassword)>0)
		{
			return true;	
		}
	}
	return false;
	
}

?>