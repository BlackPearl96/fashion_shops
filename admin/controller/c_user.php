<?php 
	if(file_exists("model/m_user.php"))
		include "model/m_user.php";
	$page=1;
	if (isset($_GET["p"])) {
		$page=$_GET["p"];
	}
	$total_record=total();
	$record_page=10;
	$from=$record_page * ($page-1);
	$num_page=ceil($total_record/$record_page);
	$arr_user= list_user($from,$record_page);
	if(isset($_GET["id_admin"]))
	{
		$id=$_GET["id_admin"];
		xoa($id);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=user'>";
	}

	if(file_exists("view/v_user.php"))
		include "view/v_user.php";
 ?>