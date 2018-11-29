<?php 
if(file_exists("model/m_list_sp.php"))
 	include "model/m_list_sp.php";
 	if(isset($_GET["id_danhmuc"]))
 		$id=$_GET["id_danhmuc"];
 	$page=1;
	if (isset($_GET["p"])) {
		$page=$_GET["p"];
	}
	//tong so ban ghi
	$total_record=total($id);
	//so ban ghi tren 1 trang
	$record_perpage=20;
	//tìm bản ghi bắt đầu trong csdl
	$from=$record_perpage * ($page-1);
	//so trang =tong so ban ghi/so ban ghi tren 1 trang
	$num_page=ceil($total_record/$record_perpage);
	
	$arr_sp=list_sp($id,$from,$record_perpage);
	$arr_danhmuc=list_danhmuc($id);

if(file_exists("view/v_list_sp.php"))
 	include "view/v_list_sp.php";
 ?>