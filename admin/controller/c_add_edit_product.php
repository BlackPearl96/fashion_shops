<?php
	if(file_exists("model/m_product.php"))
		include "model/m_product.php";

	$id="";
	$arr_danhmuc=list_alldanhmuc();
		$form_act="";
	$act="";
	if(isset($_GET["act"]))
		$act=$_GET["act"];
	switch ($act) {
		case "add":
			$arr["ten_sanpham"]=$_POST["ten_sanpham"];
			$arr["sp_hot"]=$_POST["sanpham_hot"];
			$arr["ngaydang"]=$_POST["ngaydang"];
			$arr["mota"]=$_POST["mota"];
			$arr["id_danhmuc"]=$_POST["danhmuc"];
			$arr["gia"]=$_POST["gia"];
			$arr["anh"]="images/images_sp/".time().$_FILES["upload"]["name"];
			move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/images_sp/".time().$_FILES["upload"]["name"]);
			add_product($arr);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=product'>";
			break;
		case "edit":

			$arr=array();
			$id=$_GET["id"];
			$arr=update($id);
			$form_act="index.php?controller=add_edit_product&act=do_edit&id=".$id;
			if(file_exists("view/v_add_edit_product.php"))
				include "view/v_add_edit_product.php";
			break;
		case "do_edit":
			$arr["id"]=$_GET["id"];
			$arr["ten_sanpham"]=$_POST["ten_sanpham"];
			$arr["sp_hot"]=$_POST["sanpham_hot"];
			$arr["ngaydang"]=$_POST["ngaydang"];
			$arr["mota"]=$_POST["mota"];
			$arr["id_danhmuc"]=$_POST["danhmuc"];
			$arr["gia"]=$_POST["gia"];
			$arr["anh"]="images/images_sp/".time().$_FILES["upload"]["name"];
			move_uploaded_file($_FILES["upload"]["tmp_name"],"../images/images_sp/".time().$_FILES["upload"]["name"]);
			edit($arr);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=product'>";
			break;
		default:
			$form_act="index.php?controller=add_edit_product&act=add";
			if(file_exists("view/v_add_edit_product.php"))
				include "view/v_add_edit_product.php";
			break;
	}
	
	

	
 ?>