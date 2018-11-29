<?php
	//load model
	if(file_exists("model/m_login.php"))
		include "model/m_login.php";
	//controller
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$arr["c_username"] = $_POST["c_username"];
		$arr["c_password"] = $_POST["c_password"];
		$check = check_login($arr);
		if($check == true){
			$_SESSION["user"] = $arr["c_username"];
			header("location:index.php");
		}
	}
	//load view
	if(file_exists("view/v_login.php"))
		include "view/v_login.php";
?>