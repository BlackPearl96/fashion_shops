
<?php 
if(file_exists("model/m_khachhang.php"))
	include "model/m_khachhang.php";

$arr_khachhang=list_khachhang($_SESSION["loged_customer"]);
$act="";
if(isset($_GET["act"]))
	$act=$_GET["act"];
switch ($act) {
	case "edit":
	include "view/v_edit_khachhang.php";
	if(isset($_POST["sua"]))
	{
		$arr["fullname"]=$_POST["fullname"];
		$arr["sdt"]=$_POST["sdt"];
		$arr["email"]=$_POST["email"];
		$arr["diachi"]=$_POST["diachi"];
		update($_SESSION["loged_customer"],$arr);
		echo "<script language='javascript' > alert('sửa thành công!'); </script>";	
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=khachhang'>";
	}
	break;
	case "doimk":
	include "view/v_doimk.php";
	if(isset($_POST["doimk"]))
	{
		$pass=md5($_POST["old_password"]);
		if(check_pass($_SESSION["loged_customer"],$pass)==true)
		{
			$pass1=md5($_POST["password"]);
			update_pass($_SESSION["loged_customer"],$pass1);
			echo "<script language='javascript' > alert('đổi password thành công!'); </script>";	
		}
		else
		{
			echo "<script language='javascript' > alert('password cũ không đúng!'); </script>";	
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=khachhang'>";
		}
	}
	break;
	case "lichsumuahang":
	$get_customer=list_khachhang($_SESSION["loged_customer"]);
	$id=$get_customer["id_khachhang"];
	$get_order=get_order($id);
	include "view/v_lichsumuahang.php";
	break;
	default:
	if(file_exists("view/v_khachhang.php"))
		include "view/v_khachhang.php";
	break;
		
	}


?>