<?php  	function insert($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"INSERT INTO `tbl_lienhe`(`ten_khachhang`, `email`, `message`,`ngaydang`) VALUES ('$hoten','$email','$message','$ngaydang')");
	}

	function list_khachhang($username)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_khachhang where username='$username'");
		return mysqli_fetch_array($result);
	}

?>