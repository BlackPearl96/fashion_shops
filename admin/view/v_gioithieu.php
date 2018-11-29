<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<form method="post" action="">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">
			giới thiệu:
		</label>
		<div class="col-sm-10">
			<textarea style="width:800px;height:1000px" name="noidung"><?php echo isset($arr["noidung"])?$arr["noidung"]:"" ?></textarea>
		</div>
	</div>
	<script>
		CKEDITOR.replace('noidung');
	</script>
	<div class="form-group" >
		<label for="name" class="col-sm-2 control-label" style="margin-top:50px">
		Hướng đãn mua hàng:
		</label>
		<div class="col-sm-10" style="margin-top:50px">
			<textarea style="width:800px;height:1000px" name="noidung1"><?php echo isset($arr1["noidung"])?$arr1["noidung"]:"" ?></textarea>
		</div>
	</div>
	<script>
		CKEDITOR.replace('noidung1');
	</script>
	<div class="form-group" >
		<div class="col-sm-offset-3 col-sm-9" style="margin-top:10px">
			<button type="submit" name="btn_add_edit_product" class="btn btn-primary" onClick="return checkform();">Cập nhật</button>

		</div>
	</div>
</form>