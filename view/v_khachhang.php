<style type="text/css">
	.khachhang{width: 700px;margin-left: 250px ;}
	.chaouser{width: 200px ;margin: 0px auto;font-size: 24px;font-weight: bold;line-height: 24px;color: red}
	


</style>
<div class="khachhang">
	<div class="chaouser">XIN CHÀO <?php echo $_SESSION["loged_customer"]; ?></div><hr>
	<div style="height: 475px">
	<table style="margin-left:20px" cellpadding="20" cellspacing="20">
		<tr>
			<td>Tên đăng nhập:</td>
			<td><?php echo $arr_khachhang["username"]; ?></td>
		</tr>
		<tr>
			<td>Tên khách hàng:</td>
			<td><?php echo $arr_khachhang["fullname"]; ?></td>
		</tr>
		<tr>
			<td>Mã Số Khách Hàng:</td>
			<td><?php echo $arr_khachhang["id_khachhang"]; ?></td>
		</tr>
		<tr>
			<td>Địa Chỉ khách hàng:</td>
			<td><?php echo $arr_khachhang["diachi"]; ?></td>
		</tr>
		<tr>
			<td>Số Điện Thoại khách hàng:</td>
			<td><?php echo $arr_khachhang["sdt"]; ?></td>
		</tr>
		<tr>
			<td>Email khách hàng:</td>
			<td><?php echo $arr_khachhang["email"]; ?></td>
		
	</table>
	
</div>
<hr>
</div>