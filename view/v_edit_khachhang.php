<style type="text/css">
	.t{font-size: 24px;font-weight: bold;color: red}
</style>
<div>
<fieldset style="width:500px">
<legend class="t">SỬA THÔNG TIN CÁ NHÂN</legend>
<form method="post" action="">
	<table cellpadding="20" cellspacing="20">
		<tr>
			<td>HỌ TÊN :</td>
			<td><input type="text" required name="fullname" value="<?php echo isset($arr_khachhang["fullname"])?$arr_khachhang["fullname"]:""; ?>"></td>
		</tr>
		<tr>
			<td>SỐ ĐIỆN THOẠI:</td>
			<td><input type="number" required name="sdt" value="<?php echo isset($arr_khachhang["sdt"])?$arr_khachhang["sdt"]:""; ?>"></td>
		</tr>
		<tr>
			<td>EMAIL :</td>
			<td><input type="email" required name="email" value="<?php echo isset($arr_khachhang["email"])?$arr_khachhang["email"]:""; ?>"></td>
		</tr>
		<tr>
			<td>ĐỊA CHỈ :</td>
			<td><input type="text" required name="diachi" value="<?php echo isset($arr_khachhang["diachi"])?$arr_khachhang["diachi"]:""; ?>"></td>
		</tr>
		<tr>
			<TD></TD>
			<td><input type="submit" required  value="SỬA" name="sua"></td>
		</tr>
	</table>
</form>
</fieldset>
</div>