<?php
	include "model/m_lienhe.php";
	$arr_lienhe=list_lienhe();
	if(isset($_GET["act"]))
	{
		if($_GET["act"]=="delete")
		{
			$id=$_GET["id"];
			xoa($id);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=lienhe'>";
		}
	}
	include "view/v_lienhe.php"; 
 ?>