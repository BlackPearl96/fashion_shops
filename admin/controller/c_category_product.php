<?php
	if(file_exists("model/m_category.php"))
		include "model/m_category.php";
	$arr_nhomsp=list_nhomsp();
	if(isset($_GET["id_nhomsp"]))
	{
		$id=$_GET["id_nhomsp"];
		$arr_danhmuc=list_danhmuc($id);
		
	}
	else
		$arr_danhmuc=list_alldanhmuc();
	if(isset($_GET["id_danhmuc"]))
	{
		$id=$_GET["id_danhmuc"];
		xoa($id);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category_product'>";
	}
	if(file_exists("view/v_category_product.php"))
		include "view/v_category_product.php";
 ?>