<?php 
	include "model/m_gioithieu.php";

	$arr=update();
	$arr1=update1();
	if(isset($_POST["noidung"]))
	{
		$noidung=$_POST["noidung"];
		$noidung1=$_POST["noidung1"];
		insert($noidung,$noidung1);
	}
	include "view/v_gioithieu.php";
 ?>