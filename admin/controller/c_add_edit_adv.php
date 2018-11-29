<?php 
if(file_exists("model/m_adv.php"))
	include "model/m_adv.php";
$form_action="";
$act="";
if(isset($_GET["act"]))
	$act=$_GET["act"];
switch ($act) {
	case "do_add":
	$arr["vitri"]=$_POST["vitri"];
	$arr["ten"]=$_POST["ten"];
	$arr["url"]=$_POST["url"];
	$arr["img"]="images/images_qc/".time().$_FILES["upload"]["name"];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/images_qc/".time().$_FILES["upload"]["name"]);
	insert($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=adv'>";
	break;
	case "edit":
	$arr=array();
	$id=$_GET["id"];
	$arr=update($id);
	$form_action="index.php?controller=add_edit_adv&act=do_edit&id=".$id;
	if(file_exists("view/v_add_edit_adv.php"))
		include "view/v_add_edit_adv.php";
	break;
	case "do_edit":
	$arr["id"]=$_GET["id"];
	$arr["vitri"]=$_POST["vitri"];
	$arr["ten"]=$_POST["ten"];
	$arr["url"]=$_POST["url"];
	$arr["img"]="images/images_qc/".time().$_FILES["upload"]["name"];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/images_qc/".time().$_FILES["upload"]["name"]);
	edit($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=adv'>";
	break;
	default:
	$form_action="index.php?controller=add_edit_adv&act=do_add";
	if(file_exists("view/v_add_edit_adv.php"))
		include "view/v_add_edit_adv.php";
	break;
}
?>