<?php 
if(file_exists("model/m_slide.php"))
	include "model/m_slide.php";
$form_action="";
$act="";
if(isset($_GET["act"]))
	$act=$_GET["act"];
switch ($act) {
	case "do_add":
	$arr["thutu"]=$_POST["vitri"];
	$arr["img"]="images/slide/".time().$_FILES["upload"]["name"];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/slide/".time().$_FILES["upload"]["name"]);
	insert($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=slide'>";
	break;
	case "edit":
	$arr=array();
	$id=$_GET["id"];
	$arr= update($id);
	$form_action="index.php?controller=add_edit_slide&act=do_edit&id=".$id;
	if(file_exists("view/v_add_edit_slide.php"))
		include "view/v_add_edit_slide.php";
	break;
	case "do_edit":
	$arr["id"]=$_GET["id"];
	$arr["thutu"]=$_POST["vitri"];
	$arr["img"]="images/slide/".time().$_FILES["upload"]["name"];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/slide/".time().$_FILES["upload"]["name"]);
	edit($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=slide'>";
	break;
	default:
	$form_action="index.php?controller=add_edit_slide&act=do_add";
	if(file_exists("view/v_add_edit_slide.php"))
		include "view/v_add_edit_slide.php";
	break;
}

?>