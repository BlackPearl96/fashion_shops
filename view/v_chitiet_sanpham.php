<style type="text/css">
	.anh{float: left;width: 250px;margin-left: 10px}
	.chitiet{float: left;width: 400px;}
	.luu_y{border: 1px solid #ddd;border-radius:5px;background-color: #FFFF99}
	.muahang{border: 1px solid #FFFF99;padding: 5px}
	.box1{padding-top: 50px}
	.box2{padding-top: 700px}
</style>

<div class="box1">
<div class="anh">
	<img src="<?php echo $arr_chitiet["anh_sanpham"]; ?>" style="width:200px">
</div>

<div class="chitiet">
	<p style="font-size:20px;font-weight: bold;"><?php echo $arr_chitiet["ten_sanpham"]; ?></p>
	<br>
	<p>Đăng ngày:<?php echo $arr_chitiet["ngaydang"]; ?></p>
	<br>
	<hr>
	<br>
	<p>Mã sản phẩm: <span style="color:red;font-size:15px;font-weight: bold"><?php echo $arr_chitiet["id_sanpham"]; ?></span></p><br>
	<p><span style="color:red;font-size:15px;font-weight: bold">Còn hàng Call ngay: 0977 601 447</span></p><br>
	<div class="luu_y">
		Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.
	</div>
	<br>
	<p><?php echo $arr_chitiet["mo_ta"]; ?></p><br>
	<div class="muahang">
		<p style="color:#FFCC33;width:150px;font-size:15px;font-weight: bold">CHỌN MUA HÀNG</p><br>
		<p style="color:red;font-size:15px;font-weight: bold">GIÁ:<?php echo number_format($arr_chitiet["gia"]); ?>VND</p><br>
		
		 <div class="dathang"><a href="index.php?controller=cart&act=add&id_sanpham=<?php echo $arr_chitiet["id_sanpham"]; ?>"><p style="color:#FFF; font-weight:bold">Thêm Vào Giỏ Hàng</p></a></div><br>
	</div>
</div>

<div class="box3">
	
</div>


<div class="box2">
	<div class="sp"><p style="color:#FFF; text-align:left; line-height:30px; font-weight:bold; padding-left:10px;">
	SẢN PHẨM LIÊN QUAN 
</p></div>
	<?php 
		foreach ($arr_sp as $value) {
		
	 ?>
	<div class="box_sp"><a href="<?php echo $value["id_sanpham"]; ?>-chi-tiet-san-pham-<?php echo vn_str_filter($value["ten_sanpham"]); ?>.html"><img src="<?php echo $value["anh_sanpham"]; ?>" style=" width:160px; height:150px;"><p style="text-align:center; margin-top:5px;height:20px"><?php echo $value["ten_sanpham"]; ?></p></a>
		<br/>
		<p style="color:#F00; text-align:center">Giá:<span style="font-weight:bold"><?php echo number_format($value["gia"]); ?>VND</span></p>
		<div class="dathang"><a href="index.php?controller=cart&act=add&id_sanpham=<?php echo $value["id_sanpham"]; ?>"><p style="color:#FFF; font-weight:bold">Thêm Vào Giỏ Hàng</p></a></div>
	</div>
	<?php } ?>
	
</div>
</div>
