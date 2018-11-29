<div class="sp"><p style="color:#FFF; text-align:left; line-height:30px; font-weight:bold; padding-left:10px;">
	SẢN PHẨM MỚI
</p></div>
<?php 
foreach ($arr_sp as $value) {
					# code...
	
	?>
	<div class="box_sp"><a href="<?php echo $value["id_sanpham"]; ?>-chi-tiet-san-pham-<?php echo vn_str_filter($value["ten_sanpham"]) ?>.html"><img src="<?php echo $value["anh_sanpham"]; ?>" style=" width:160px; height:150px;"><p style="text-align:center; margin-top:5px;height:20px"><?php echo $value["ten_sanpham"]; ?></p></a>
		<br/>
		<p style="color:#F00; text-align:center">Giá:<span style="font-weight:bold"><?php echo number_format($value["gia"]); ?>VND</span></p>
		<div class="dathang"><a href="index.php?controller=cart&act=add&id_sanpham=<?php echo $value["id_sanpham"]; ?>"><p style="color:#FFF; font-weight:bold">Thêm Vào Giỏ Hàng</p></a></div>
	</div>
	<?php } ?>

	