<style type="text/css">
	.pagination{padding:0px; margin: 0px;}
</style>

	<div class="panel panel-primary">
		<div class="panel-heading">Danh sách user</div>
		<div class="panel-body">
			<div style="margin-bottom:5px;">
				<a href="index.php?controller=add_edit_user" class="btn btn-primary">Add new</a>
			</div>
			<table class="table table-hover table-bordered">
				<tr style="background:#dddddd">
					<th style="text-align:center; width:50px;">STT</th>
					<th style="width:200px">Username</th>
					<th>Fullname</th>
					<th style="width:100px">Manage</th>
				</tr>
				<?php
					$stt = 0;
					foreach($arr_user as $rows_user)
					{
						$stt++;
				?>
				<tr>
					<td style="text-align:center"><?php echo $stt; ?></td>
					<td><?php echo $rows_user["c_username"]; ?></td>
					<td><?php echo $rows_user["c_fullname"]; ?></td>
					<td>
						<a href="index.php?controller=add_edit_user&act=edit_user&id=<?php echo $rows_user["pk_user_id"];?>">Edit</a>&nbsp;&nbsp;
						<a href="index.php?controller=user&id_admin=<?php echo $rows_user["pk_user_id"];?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<ul class="pagination pull-right">
			<?php
				for($i=1; $i<=$num_page; $i++)
				{
			?>
				<li>
					<a href="index.php?controller=user&p=<?php echo $i;?>">
						<?php echo $i;?>
					</a>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>

