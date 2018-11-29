<?php 
 include "model/m_lienhe.php";
 	if(isset($_GET["id"]))
 		$id=$_GET["id"];
 		$arr=array();
 		$arr=update($id);
 	if(isset($_POST["message"]))
 	{
 		$to=$_POST["email"];
 		$message=$_POST["message"];
 		$subject="xinh shop";
 		$send=mail($to,$subject,$message);
 		if ($send) {
 			
 		echo "thư đã gửi đến".$to;
 		
 	}
 	else
 		echo "không thể gưi đến địa chỉ".$to;
 		
 	}
 include "view/v_traloi.php";
 ?>