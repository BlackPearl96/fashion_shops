<?php 
	include "model/m_donhang.php";
	$p=0;
$key="1,0";
if(isset($_GET["key"]))
{
	if(is_numeric($_GET["key"]))
	$key=$_GET["key"];	
}
$total_record=total_record($key);
$record_perpage=5;
$page=ceil($total_record/$record_perpage);
if(isset($_GET["p"]))
{
	$p=$_GET["p"];	
}
if($p>0)
{
	$p--;	
}
$from=$p*$record_perpage;


$get_order=get_order($key,$from,$record_perpage);

$act="";
if(isset($_GET["act"]))
{
	$act=$_GET["act"];
	switch ($act)
	{
		case "xuly":
			if(isset($_POST["id"]))
			{
				$id=$_POST["id"];
				$str_id=implode($id,',');
				//echo $str_id;
				xuly_donhang($str_id);
			}
				echo "<meta http-equiv='refresh' content='0; url=index.php?controller=donhang'>";
		break;	
	}	
}

	include "view/v_donhang.php";
 ?>