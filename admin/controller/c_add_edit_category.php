<?php
	if(file_exists("model/m_category.php"))
		include "model/m_category.php";
	$arr_nhomsp=list_nhomsp();
	$form_act="";
	$act="";
	if(isset($_GET["act"]))
		$act=$_GET["act"];
	switch ($act) {
		case "add":
			$ten_danhmuc=$_POST["danhmuc"];
			$id_nhomsp=$_POST["nhomsp"];
			add_danhmuc($ten_danhmuc,$id_nhomsp);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category_product'>";
			break;
		case "edit":
			$arr=array();
			$id=$_GET["id"];
			$arr=update($id);
			$form_act="index.php?controller=add_edit_category&act=do_edit&id=".$id;
			if(file_exists("view/v_add_edit_category.php"))
				include "view/v_add_edit_category.php";
			break;
		case "do_edit":
			$data["id"]=$_GET["id"];
			$data["ten_danhmuc"]=$_POST["danhmuc"];
			$data["id_nhomsp"]=$_POST["nhomsp"];
			edit($data);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category_product'>";
			break;
		default:
			$form_act="index.php?controller=add_edit_category&act=add";
			if(file_exists("view/v_add_edit_category.php"))
				include "view/v_add_edit_category.php";
			break;
	}
	
	
 ?>