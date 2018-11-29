<script language="javascript">
function checkform()
{
	var n=0;
	
	if(document.getElementById("ten").value=="")
	{
		document.getElementById("ten1").innerHTML="Bạn phải nhập tên";
		n++;	
	}
	else
	{
		document.getElementById("ten1").innerHTML="";	
	}
	
	if(document.getElementById("url").value=="")
	{
		document.getElementById("url1").innerHTML="Bạn phải nhập tên";
		n++;	
	}
	else
	{
		document.getElementById("url1").innerHTML="";	
	}
	
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
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-User</div>
                    <div class="panel-body">
                        <form id="category-form" action="<?php echo $form_action; ?>" class="form-horizontal" method="post" enctype="multipart/form-data" role="form">
                            <input name="id" id="f" name="f" type="hidden" value="8"/>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Tên:
                                </label>
                                <div class="col-sm-9">
                                <input name="ten" id="ten"  type="text"  class="form-control"  value="<?php echo isset($arr["ten_quangcao"])? $arr["ten_quangcao"]:""; ?>"/>
                                <span id="ten1" ></span>    
                                </div>
                            </div> 
                            
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                url:
                                </label>
                                <div class="col-sm-9">
                                <input name="url" id="url"  type="text"  class="form-control"  value="<?php echo isset($arr["link"])? $arr["link"]:""; ?>"/>
                                <span id="url1" ></span>    
                                </div>
                                </div> 

                                <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                vị trị:
                                </label>
                                <div class="col-sm-9">
                                <input name="vitri" id="url"  type="text"  class="form-control"  value="<?php echo isset($arr["vitri"])? $arr["vitri"]:""; ?>"/>
                                <span id="url1" ></span>    
                                </div>
                                </div>


                            
                            
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
                            </div>
                             
                             <div class="form-group">
                             <?php
                             if(isset($_GET["id"]))
							 {
							 ?>
                            <div style="margin-left:200px;">
                             	<img src="../<?php echo isset($arr["anh"])? $arr["anh"]:""; ?>" style="width:300px; height:150px;">
                            </div>
                            <?php
							 }
							?>
                            </div>
                            
                            
                            
                          
                        
                            
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" name="btn_add_edit_adv" class="btn btn-primary" value="Cập nhập" onClick="return checkform();">
                                    
                                    <a class="btn btn-warning" href="index.php?controller=adv">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>
</body>