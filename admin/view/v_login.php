<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" connect="width=decive-width, initial-scale=1">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >

</head>
<style type="text/css">
.panel {width:500px; margin:0px auto;}
</style>
<body>


<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js" ></script>
</body>
<div class="container">
	<div class="panel panel-primary">
    	<div class="panel-heading" >LOGIN</div>
        <div class="panel-body">
        	<table class="table-condensed" >
            <form method="post" class="form-control">
            	<tr>
                	<td>
                    	<label for="username" >Username</label>
                        <input type="text" name="c_username" id="c_username" class="form-control" placeholder="Enter username" style="width:300px;"  required >
                    </td>
                </tr>
                <tr>
                	<td>
                    	<label for="password" >Password</label>
                        <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Enter password" style="width:300px;"  required>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<input type="submit" name="btnsubmit" value="Login" class="btn btn-primary" >
						<input type="reset" class="btn btn-primary" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
</html>