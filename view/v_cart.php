<script type="text/javascript">
	function checkform()
	{
		if(document.getElementById("soluong").value<0)
		{
			alert ('số lượng không đk nhỏ hơn 0');
			return false;
		}
		else
			return true;
	}
</script>

<div>

<form method="post" action="index.php?controller=cart&act=update">
	<table cellpadding="5" border="1" style="border-collapse: collapse;">
		<tr>
			<th style="width: 50px;">STT</th>
			<th style="width:100px">Ảnh</th>
			<th style="width:200px">Tên sản phẩm</th>
			<th style="width:200px">Giá</th>
			<th style="width:100px">Số lượng</th>
			<th style="width:100px">Thao tác</th>
		</tr>
	<?php
		$stt = 0;
		foreach($_SESSION["cart"] as $key=>$rows)
		{
			$stt++;
	?>
		<tr>
			<td style="text-align: center;width: 50px;"><?php echo $stt;?></td>
			<td>
			<img style="text-align: center;width:100px" src="<?php echo $rows["anh_sanpham"];?>">
			</td>
			<td style="text-align: center;width:200px"><?php echo $rows["ten_sanpham"];?></td>
			<td style="text-align: center;width:200px"><?php echo number_format($rows["gia"]);?> VND</td>
			<td style="text-align: center;">
				<input type="number" id="soluong" name="product_<?php echo $rows["id_sanpham"];?>" value="<?php echo $rows["number"];?>" style="width:50px;">
			</td>
			<td style="text-align: center;">
				<a href="index.php?controller=cart&act=delete&id_sanpham
				=<?php echo $rows["id_sanpham"];?>">
				Delete
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
	<table cellpadding="20" cellspacing="20" style="margin-left:250px">
		<tr>
			<td>TÊN KHÁCH HÀNG:</td>
			<td><?php echo isset($_SESSION["loged_customer"])?$_SESSION["loged_customer"]:""; ?></td>
		</tr>
		<tr>
			<td>TỔNG TIỀN:</td>
			<td><?php echo number_format(cart_total()); ?> VND</td>
		</tr>
		<tr>
			<td><input type="submit" onclick="return checkform();" value="Cập nhập giỏ hàng"></td>
			<td><button><a href="index.php?controller=cart&act=destroy">XÓA GIỎ HÀNG</a></button></td>

		</tr>
		<tr>
			<td>
				<div class="dathang"><a href="index.php"><p style="color:#FFF; font-weight:bold">Tiếp Tục Mua Hàng</p></a></div>
			</td>
			<?php 
				if(isset($_SESSION["loged_customer"]))
				{
					if(count($_SESSION["cart"])==0)
					{


			 ?>
			 <td><div class="dathang"><a href=""><p style="color:#FFF; font-weight:bold">không có sp</p></a></div></td>
			 <?php } else {?>

			<td><div class="dathang"><a href="index.php?controller=dienthongtin"><p style="color:#FFF; font-weight:bold">Đặt Hàng</p></a></div></td>
			<?php } ?>
			<?php }
			else if(count($_SESSION["cart"])!=0){

			?>
			<td><div class="dathang"><a href="index.php?controller=dienthongtin"><p style="color:#FFF; font-weight:bold">Điền Thông Tin</p></a></div></td>
		<?php } 
		else{
			?>
			<td><div class="dathang"><a href=""><p style="color:#FFF; font-weight:bold">không có sp</p></a></div></td>
		</tr>
		<?php } ?>
	</table>
		
	</form>

</div>