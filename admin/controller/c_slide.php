<?php
	//load model slide
	if(file_exists("model/m_slide.php"))
		include "model/m_slide.php";
	//load controller slide
	$arr_slide = list_slide();
	if(isset($_GET["id_slide"]))
	{
		$id=$_GET["id_slide"];
		xoa($id);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=slide'>";
	}
		
	//load view sile
	if(file_exists("view/v_slide.php"))
		include "view/v_slide.php";

?>