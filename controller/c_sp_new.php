<?php 
	if(file_exists("model/m_sp_new.php"))
	include "model/m_sp_new.php";
	$arr_sp=list_sp();


	if(file_exists("view/v_sp_new.php"))
	include "view/v_sp_new.php";
 ?>