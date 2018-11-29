<?php
 include "model/m_news.php";

$page=1;
	if (isset($_GET["p"])) {
		$page=$_GET["p"];
	}
	//tong so ban ghi
	$total_record=total();
	//so ban ghi tren 1 trang
	$record_perpage=10;
	//tìm bản ghi bắt đầu trong csdl
	$from=$record_perpage * ($page-1);
	//so trang =tong so ban ghi/so ban ghi tren 1 trang
	$num_page=ceil($total_record/$record_perpage);
	$arr_news= list_news($from,$record_perpage);
 
 include "view/v_news.php"; 
 ?>