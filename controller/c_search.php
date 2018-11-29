<?php 
if(file_exists("model/m_search.php"))
 	include "model/m_search.php";
 	if(isset($_POST["ten_sp"]))
 		$ten_sp=mysql_escape_string($_POST["ten_sp"]);
 	
 	$page=1;
	if (isset($_GET["p"])) {
		$page=$_GET["p"];
	}
	//tong so ban ghi
	$total_record=total($ten_sp);
	//so ban ghi tren 1 trang
	$record_perpage=20;
	//tìm bản ghi bắt đầu trong csdl
	$from=$record_perpage * ($page-1);
	//so trang =tong so ban ghi/so ban ghi tren 1 trang
	$num_page=ceil($total_record/$record_perpage);
	
	$arr_sp=list_sp($ten_sp,$from,$record_perpage);


if(file_exists("view/v_search.php"))
 	include "view/v_search.php";
 ?>