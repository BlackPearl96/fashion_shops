<script language="javascript">

function checkform()
{
	var n=0;
	<?php 
	if(!isset($_GET["id"]))
	{
	?>
	if(document.getElementById("file").value=="")
	{
		document.getElementById("file1").innerHTML="Bạn phải chọn ảnh";	
		n++;
	}
	else
	{
		document.getElementById("file1").innerHTML="";
	}
	<?php
	}
	?>
	if(n==0)
	{
		return true;	
	}
	else
	{
		return false;	
	}
}
</script>
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
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Update slide</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $form_action;?>" enctype="multipart/form-data" role="form" enctype="multipart/form-data" >
                            <input name="id" id="f" name="f" type="hidden" value="8"/>
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Hình ảnh:
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" name="upload" id="file" >	
                                    <br>
                                    <span id="file1"></span>
                                    <br>
                                </div>
                                <label for="name" class="col-sm-3 control-label">
                                Vị Trí:
                                </label>
                                <div class="col-sm-3">
                                <input name="vitri" id="vitri"  type="text"  class="form-control"  value="<?php echo isset($arr["vitri"])? $arr["vitri"]:"";?>"/>
                                <span id="thutu" ></span>    
                                </div>
                            </div>
                             <div class="form-group">
                             
                            <div style="margin-left:200px;">
                             	<img src="../<?php echo isset($arr["anh"])?$arr["anh"]:"";?>" style="width:300px; height:150px;">
                            </div>
                        
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" name="btn_add_edit_slide" class="btn btn-primary" value="Cập nhập" onClick="return checkform();">
                                    
                                    <a class="btn btn-warning" href="index.php?controller=slide">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>
</body>