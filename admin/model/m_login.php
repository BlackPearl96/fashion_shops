<?php
	function check_login($arr){
		extract($arr);
		global $link;
		$c_password = md5($c_password);
		$check = mysqli_query($link,"select c_username from tbl_user where c_username='$c_username' and c_password = '$c_password'");		
		if(mysqli_num_rows($check) > 0)
			return true;
		return false;
	}
?>