<?php
$cart="0";
function get_product($id)
{
	global $link;
	$result=mysqli_query($link,"select * from tbl_sanpham where id_sanpham='$id'");
	$row=mysqli_fetch_array($result);
	return $row;
}

function list_khachhang($username)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_khachhang where username='$username'");
		return mysqli_fetch_array($result);
	}


function add_order($arr_new_customer)
{
	global $link;
	extract($arr_new_customer);
	mysqli_query($link,"INSERT INTO `tbl_khachhang`( `diachi`, `sdt`, `fullname`, `email`) VALUES ('$diachi','$sdt','$fullname','$email')");
	//lay id khach hang
	$result=mysqli_query($link,"select id_khachhang from tbl_khachhang order by id_khachhang  desc");
	$kh=mysqli_fetch_array($result);
	$id_khachhang=$kh["id_khachhang"];
	// ad order
	$date=date("Y-m-d");  
	mysqli_query($link,"INSERT INTO `tbl_donhang`(`id_khachhang`, `tinhtrang`, `date`) VALUES ('$id_khachhang',0,'$date')");
	
	//lay id dn hang
	$result1=mysqli_query($link,"select id_donhang from tbl_donhang order by id_donhang desc");
	$order=mysqli_fetch_array($result1);
	$id_donhang=$order["id_donhang"];
	if(isset($_SESSION["cart"])){
	foreach($_SESSION["cart"] as $id_sanpham => $number)
	{
			$arr_product=get_product($id_sanpham);
			$gia=$arr_product['gia'];
			$number=$number["number"];
			mysqli_query($link,"INSERT INTO `tbl_chitietdonhang`( `id_donhang`, `id_sanpham`, `soluong`, `gia`) VALUES ('$id_donhang','$id_sanpham','$number','$gia')");
			
	}

	}

}


function add_order1($id_khachhang)
{
		global $link;
		$n=0;
		$date=date("Y-m-d");  
		mysqli_query($link,"INSERT INTO `tbl_donhang`(`id_khachhang`, `tinhtrang`, `date`) VALUES ('$id_khachhang',0,'$date')");
		//lay id dn hang
		$result1=mysqli_query($link,"select id_donhang from tbl_donhang order by id_donhang desc");
		$order=mysqli_fetch_array($result1);
		$id_donhang=$order["id_donhang"];
		foreach($_SESSION["cart"] as $id_sanpham=>$number)
		{
				$n++;
				$arr_product=get_product($id_sanpham);
				$gia=$arr_product['gia'];
				$number=$number["number"];
			mysqli_query($link,"INSERT INTO `tbl_chitietdonhang`( `id_donhang`, `id_sanpham`, `soluong`, `gia`) VALUES ('$id_donhang','$id_sanpham','$number','$gia')");
		}
		unset($_SESSION["cart"]);
		
}

?>