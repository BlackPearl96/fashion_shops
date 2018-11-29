<style type="text/css">
	.khachhang{width: 700px;margin-left: 250px ;}
	.chaouser{width: 200px ;margin: 0px auto;font-size: 24px;font-weight: bold;line-height: 24px;color: red}
	


</style>
<div class="khachhang">
	<div class="chaouser">XIN CHÀO <?php echo $_SESSION["loged_customer"]; ?></div><hr>
	<table cellpadding="15" cellspacing="15" >
		<tr>
			<th style="width:50px">STT</th>
			<th style="width:200px">ID ĐƠN HÀNG</th>
			<th style="width:200px">NGÀY ĐẶT</th>
			<th style="width:100px">XEM</th>
		</tr>
		<?php
		$stt=0;
		foreach($get_order as $value)
		{
			$stt++;
			?>
			<tr>
				<td style="text-align:center"><?php echo $stt;?></td>
				<td style="text-align:center"><?php echo $value["id_donhang"];?></td>
				<td style="text-align:center"><?php echo $value["date"];?></td>
				<td style="text-align:center"><a href="don-hang-cua-ban-<?php echo $value["id_donhang"];?>.html">XEM</a></td>

			</tr>
			<?php
		}
		?>
	</table>

</div>