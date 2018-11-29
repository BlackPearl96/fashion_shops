<?php
if(file_exists("model/m_news.php"))
 include "model/m_news.php";
	if(isset($_GET["id_news"]))
		$id=$_GET["id_news"];
	$arr_news=news($id);
 include "view/v_list_news.php" ;
 ?>