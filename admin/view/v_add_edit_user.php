<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">                
               <!-- BEGIN CONTENT -->
                    <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-User</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $form_act;?>" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="8"/>
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Username
                                </label>
                                <div class="col-sm-9">
                                <input name="username" id="username" type="text"  class="form-control"  placeholder="Enter username"  value="<?php echo isset($arr["c_username"])?$arr["c_username"]:"";?>"/>
                                <span id="username1"></span>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input name="password" id="password" type="password"  class="form-control" placeholder="Enter passwrod"  value="<?php if(isset($_GET["id"])) echo $arr["c_password"];?>"/>
                                <span id="password1"></span>
                                </div>
                            </div>  
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Fullname</label>
                                <div class="col-sm-9">
                                    <input name="fullname" id="fullname" type="text"  class="form-control"  placeholder="Enter Fullname" 
                                    value="<?php echo isset($arr["c_fullname"])?$arr["c_fullname"]:"";?>"/>
                                    <span id="fullname1"></span>
                                </div>
                            </div>   
                            
                                             
                           
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btn_add_edit_user" class="btn btn-primary" onClick="return checkform();">Cập nhật</button>
                                    <a class="btn btn-warning" href="index.php?controller=user">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>
