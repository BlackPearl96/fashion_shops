<?php 
if(file_exists("model/m_news.php"))
	include "model/m_news.php";
$form_action="";
$act="";
if(isset($_GET["act"]))
	$act=$_GET["act"];
switch ($act) {
	case "do_add":
	$arr["tieude"]=$_POST["tieude"];
	$arr["noidung"]=$_POST["noidung"];
	$arr["ngaydang"]=$_POST["date"];
	$arr["hot"]=$_POST["news_hot"];
	$arr["img"]="images/images_tintuc/".time().$_FILES["upload"]["name"];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/images_tintuc/".time().$_FILES["upload"]["name"]);
	insert($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=news'>";
	break;
	case "edit":
	$arr=array();
	$id=$_GET["id"];
	$arr=update($id);
	$form_action="index.php?controller=add_edit_news&act=do_edit&id=".$id;
	if(file_exists("view/v_add_edit_news.php"))
		include "view/v_add_edit_news.php";
	break;
	case "do_edit":
	$data= array();
	$data["id"]=$_GET["id"];
	$data["tieude"]=$_POST["intro"];
	$data["ngaydang"]=$_POST["date"];
	$data["noidung"]=$_POST["noidung"];
	$data["img"]="images/images_tintuc/".time().$_FILES["upload"]["name"];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/images_tintuc/".time().$_FILES["upload"]["name"]);
	edit($data);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=news'>";
	break;
	default:
	$form_action="index.php?controller=add_edit_news&act=do_add";
	if(file_exists("view/v_add_edit_news.php"))
		include "view/v_add_edit_news.php";
	break;
}

?>