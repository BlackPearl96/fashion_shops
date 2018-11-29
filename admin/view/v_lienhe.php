<link rel="stylesheet" href="css/feedback.css" type="text/css" >
<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
                
       <!-- content here -->
           <div class="panel panel-default">
               <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> ý kiến phản hồi</div>
               <div class="panel-body">
                
               <form id="category_form" method="post" action="index.php?controller=user&act=delete_all" role="form">

					<div class="col-xs-12">
	
                        <div class="form-group">
                            <!-- Single button -->
                            <!-- Single button -->
                          
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20px; text-align:center">STT</th>
                                    <th style="width:150px;">Tên Khách hàng</th>
                                    <th style="width:200px;">Nội Dung</th>
                                    <th style="width:200px;">Ngày Gửi</th>
                                    <th style="width:80px; text-align:center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                      	         <?php 
                                 $stt=0;
                                  foreach ($arr_lienhe as $value) {
                                  $stt++;
                                  ?>
                                	<tr>
                          
                                    <td style="width:20px; text-align:center"><?php echo $stt; ?></td>
                                    <td style="width:150px;"><?php echo $value["ten_khachhang"]; ?></td>
                                    <td style="width:200px;"><?php echo $value["message"]; ?></td>
                                    <td><?php echo $value["ngaydang"]; ?></td>
                                    <td style="width:80px; text-align:center">
                                    <a href="index.php?controller=traloi&act=traloi&id=<?php echo $value["id_lienhe"];?>">trả lời</a> /
                                     <a href="index.php?controller=lienhe&act=delete&id=<?php echo $value["id_lienhe"];?>">xóa</a></dt>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
</div>
</div>

				</form>                
                 		</div>
        			</div>
             <!-- end content -->
                </div>
        </div>       
</div>