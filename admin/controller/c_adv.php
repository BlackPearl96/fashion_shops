<?php 
	if(file_exists("model/m_adv.php"))
		include "model/m_adv.php";
	$arr_adv=list_adv();
	if(isset($_GET["id_qc"]))
	{
		$id=$_GET["id_qc"];
		xoa($id);
		
	}
	if(file_exists("view/v_adv.php"))
		include "view/v_adv.php";
 ?>