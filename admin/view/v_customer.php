	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">khách hàng</h3>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
			<tr>	
				<th style="width:20px; text-align:center"><input id="checkAll" type="checkbox"/></th>
				<th style="width:50px">stt</th>
				<th style="width:150px">user name</th>
				<th style="width:150px">fullname</th>
				<th style="width:150px">địa chỉ</th>
				<th style="width:150px">sđt</th>
				<th style="width:100px">email</th>
				<th style="width:100px">manage</th>
			</tr>
			
			<?php 
				$stt=0;
				foreach ($arr_customer as $row) {
				$stt++;
			 ?>
			 <tr>
			 	<td style="text-align:center"><input name="id[]" type="checkbox" value="<?php echo $row["id_user"] ;?>"></td>
				<td><?php echo $stt; ?></td>
				<td><?php echo $row["username"];?></td>
				<td><?php echo $row["fullname"]; ?></td>
				<td><?php echo $row["diachi"]; ?></td>
				<td><?php echo $row["sdt"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td>
					<a onclick="return window.confirm('có chắc xóa khách hàng này này');" href="index.php?controller=customer&id_khachhang=<?php echo $row["id_khachhang"]; ?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
			
			</table>
			 <ul class="pagination pull-right">
	   	<?php 
		for ($i=1; $i<=$num_page ; $i++) { 
		 ?>
			<li><a href="index.php?controller=customer&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			
			<?php } ?>
	   </ul>
		</div>
	</div>
