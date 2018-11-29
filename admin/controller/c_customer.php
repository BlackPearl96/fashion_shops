<?php 
	if(file_exists("model/m_customer.php"))
		include "model/m_customer.php";
	$page=1;
	if (isset($_GET["p"])) {
		$page=$_GET["p"];
	}
	//tong so ban ghi
	$total_record=total();
	//so ban ghi tren 1 trang
	$record_perpage=5;
	//tìm bản ghi bắt đầu trong csdl
	$from=$record_perpage * ($page-1);
	//so trang =tong so ban ghi/so ban ghi tren 1 trang
	$num_page=ceil($total_record/$record_perpage);
	$arr_customer= list_customer($from,$record_perpage);
	if(isset($_GET["id_khachhang"]))
	{
		$id=$_GET["id_khachhang"];
		delete($id);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=customer'>";
	}
	if(file_exists("view/v_customer.php"))
		include  "view/v_customer.php";
 ?>