<?php 
	if(file_exists("model/m_user.php"))
		include ("model/m_user.php");
	$form_act="";
	$act="";
	if(isset($_GET["act"]))
		$act=$_GET["act"];
	switch ($act) {
		case "do_add":
			$arr=array();
			$arr["c_username"]=$_POST["username"];
			$arr["c_password"]=md5($_POST["password"]);
			$arr["c_fullname"]=$_POST["fullname"];
			add($arr);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=user'>";
			break;
		case "edit_user":
			$arr=array();
			$id=$_GET["id"];
			$arr=update($id);
			$form_act="index.php?controller=add_edit_user&act=do_edit_user&id=".$id;
			if(file_exists("view/v_add_edit_user.php"))
				include "view/v_add_edit_user.php";
		break;
		case "do_edit_user":
				$data["id"]=$_GET["id"];
				$data["c_username"]=$_POST["username"];
				$data["c_password"]=md5($_POST["password"]);
				$data["c_fullname"]=$_POST["fullname"];
				edit($data);
				echo "<meta http-equiv='refresh' content='0; url=index.php?controller=user'>";
		break;
		default:
			$form_act="index.php?controller=add_edit_user&act=do_add";
			if(file_exists("view/v_add_edit_user.php"))
				include "view/v_add_edit_user.php";
			break;
	}
 ?>