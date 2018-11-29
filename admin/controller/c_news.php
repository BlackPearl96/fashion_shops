<?php 
	if(file_exists("model/m_news.php"))
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
	$act="";
$act="";

$act="";
if(isset($_GET["act"]))
{
	$act=$_GET["act"];	

switch($act)
{
	case "delete":
	if(is_numeric($_GET["id_tintuc"]))
	$id=$_GET["id_tintuc"];
	xoa($id);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=news'>";
	break;
	
	case "delete_all":
	if(isset($_POST["id"]))
	{
		$id=$_POST["id"];
		$str_id=implode($id,",");	
		delete_all_news($str_id);
	}
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=news'>";
	break;
}
}

	if(file_exists("view/v_news.php"))
		include "view/v_news.php";
 ?>