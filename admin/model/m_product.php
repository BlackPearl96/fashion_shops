<?php 
function total(){
		global $link;
		$result=mysqli_query($link,"select id_sanpham from tbl_sanpham");
		return mysqli_num_rows($result);
	}
	function list_alldanhmuc()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	} 
	function list_product($from,$record_perpage)
	{
		global $link;
		if(isset($_POST["ten_sanpham"]))
		{
			$id_nhomsp=$_POST["id_nhomsp"];
			$ten_sanpham=$_POST["ten_sanpham"];
			$result=mysqli_query($link,"select * from tbl_sanpham where ten_sanpham like '%".$ten_sanpham."%' limit $from,$record_perpage");
			if(mysqli_num_rows($result)==0)
				echo "không tìm thấy sản phẩm";
		}
		else
		{
			$result=mysqli_query($link,"select * from tbl_sanpham order by id_sanpham desc limit $from,$record_perpage");
		}
		if(isset($_GET["id_nhomsp"]))
		{
			$id_nhomsp=$_GET["id_nhomsp"];
			$result=mysqli_query($link,"select * from tbl_sanpham where id_nhomsp='$id_nhomsp' limit $from,$record_perpage");
		}
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	} 
	function get_danhmuc($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_danhmuc where id_danhmuc=$id");
		return mysqli_fetch_array($result);
	}
	function add_product($arr)
	{
		global $link;
		extract($arr);
		mysqli_query($link,"INSERT INTO `tbl_sanpham`(`id_danhmuc`, `ten_sanpham`, `anh_sanpham`, `ngaydang`, `mo_ta`, `gia`, `sanpham_hot`) VALUES ($id_danhmuc,'$ten_sanpham','$anh','$ngaydang','$mota','$gia','$sp_hot')");
	}
	function delete($id)
	{
		global $link;
		mysqli_query($link,"delete from tbl_sanpham where id_sanpham='$id'");
		
	}
	function update($id)
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_sanpham where id_sanpham='$id'");
		return mysqli_fetch_array($result);
	}
	function edit($data)
	{
		extract($data);
		global $link;
		mysqli_query($link,"UPDATE `tbl_sanpham` SET `id_danhmuc`='$id_danhmuc',`ten_sanpham`='$ten_sanpham',`anh_sanpham`='$anh',`ngaydang`='$ngaydang',`mo_ta`='$mota',`gia`='$gia',`sanpham_hot`='$sp_hot' where id_sanpham=$id");
	}
 ?>