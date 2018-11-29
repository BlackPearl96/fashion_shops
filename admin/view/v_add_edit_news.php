<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cùng học Bootstrap</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">                
				<!-- BEGIN CONTENT -->
				<div class="panel panel-default">
					<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-news</div>
					<div class="panel-body">
						<form id="category-form" class="form-horizontal" method="post" action="<?php echo "$form_action";?>" enctype="multipart/form-data" >
							<input name="id" type="hidden" value="8"/>


							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">Tiêu đề:
								</label>
								<div class="col-sm-9">
									<input name="tieude" id="name" type="text" value="<?php echo isset($arr["tieude"])?$arr["tieude"]:"" ?>" class="form-control"/>
									<span id="name1"></span>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">Ngày đăng:
								</label>
								<div class="col-sm-9">
									<input name="date" id="name" type="date" value="<?php echo isset($arr["ngaydang"])?$arr["ngaydang"]:"" ?>" class="form-control"/>
									<span id="name1"></span>
								</div>
							</div>

							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">
									Tin tức hot:
								</label>
								<div class="col-sm-9">
									<input type="checkbox" name="news_hot" value="1" >
								</div>
							</div>  


							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">
									Nội dung:
								</label>
								<div class="col-sm-9">
									<textarea style="width:600px;height:400px" name="noidung"><?php echo isset($arr["noidung"])?$arr["noidung"]:"" ?></textarea>
								</div>
							</div>
							<script>
								CKEDITOR.replace('noidung');
							</script>
							
							
							


							<div class="form-group">
								<label for="name" class="col-sm-3 control-label">

									Ảnh:
								</label>
								<div class="col-sm-9">
									<input type="file" name="upload" id="f" >	
									<br>
									<span id="f1"></span>
									<br>
								</div>
								<div style="width:200px;margin:0px auto">
									<img style="width:200px" src="../<?php echo isset($arr["hinhanh"])?$arr["hinhanh"]:""; ?>">
								</div>
							</div>
							<br><br>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<button type="submit" name="btn_add_edit_product" class="btn btn-primary" onClick="return checkform();">Cập nhật</button>
									
								</div>
							</div>

						</form>
					</div>
				</div>                <!-- END CONTENT -->

			</div>
		</div>       
	</div>
</body>