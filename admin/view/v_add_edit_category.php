<script src="ckeditor/ckeditor.js"></script>
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
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-category</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $form_act;?>" enctype="multipart/form-data" role="form" enctype="multipart/form-data">
                            <input name="id" type="hidden" value="8"/>
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Danh mục sản phẩm:
                                </label>
                                <div class="col-sm-9">
                                    <input name="danhmuc" type="text"  class="form-control"   required value="<?php echo isset($arr["ten_danhmuc"])?$arr["ten_danhmuc"]:"";?>"/>
                                </div>
                            </div>
                            
                                <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Thuộc nhóm sản phẩm:
                                </label>
                                <div class="col-sm-9">
									<select name="nhomsp" class="form-control">
                                    	<?php 
                                        foreach ($arr_nhomsp as $row) {
                                         ?>
                                        <option value="<?php echo $row["id_nhomsp"] ?>" ><?php echo $row["ten_nhomsp"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div> 
                            
                          
                        
                            
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btn_add_edit_category" class="btn btn-primary">Cập nhật</button>
                                    <a class="btn btn-warning" href="index.php?controller=category">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>
</body>