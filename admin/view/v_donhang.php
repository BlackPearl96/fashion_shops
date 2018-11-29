<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
                
       <!-- content here -->
           <div class="panel panel-default">
               <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> 
               Danh Sách Đơn Hàng 
               <?php 
               if($key=="1,0")
                {
                echo "";    
                }
                else
                {
                   if($key==1)
                   {
                    echo "đã được xử lý";   
                    }
                    if($key==0)
                    {
                    echo "chưa đươc xử lý";
                    }
                }
                    
               ?>
               
               </div>
               <div class="panel-body">
                
               <form id="category_form" method="post" action="index.php?controller=donhang&act=xuly" role="form">

                    <div class="col-xs-12">
    
                        <div class="form-group">
                            <!-- Single button -->
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20px; text-align:center"><input id="checkAll" type="checkbox"/></th>
                                    <th style="width:20px; text-align:center">STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Họ Tên Khách Hàng</th>
                                    <th>Ngày đăng</th>
                                    <th>Tình Trạng</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $stt=0;
                            foreach($get_order as $value)
                            {
                                $stt++;
                                $get_customer=get_customer($value["id_khachhang"]);
                                
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="checkAll" value="<?php echo $value["id_donhang"];?>" <?php if($value["tinhtrang"]==1) echo "checked"; ?> ></td>
                                    <td><?php echo $stt;?></td>
                                    <td><?php echo $value["id_donhang"];?></td>
                                    <td><?php echo $get_customer["fullname"];?></td>
                                    <td><?php echo $value["date"];?></td>
                                    <td>
                                    <?php 
                                    if($value["tinhtrang"]==1)
                                    {
                                        echo "Đã được xử lý";   
                                    }
                                    else
                                    {
                                        echo "Chưa được xử lý"; 
                                    }
                                    
                                    ?>
                                    
                                    </td>
                                    <td><a href="index.php?controller=chitietdonhang&id=<?php echo $value["id_donhang"];?>&id_khachhang=<?php echo $value["id_khachhang"]; ?>" ><span class="glyphicon glyphicon-list"></span></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <div class="text_left">
                        <button type="submit" name="btn_xuly" class="btn btn-default">
                        Xử lý
                        </button>
                        
                        </div>
                       <div class="text-right" style="margin-top:-55px;">
                            <ul class="pagination">
                            <li class="disabled"><span>Page</span></li>
                            <?php
                            for($p=1;$p<=$page;$p++)
                            {
                            ?>
                                
                                <li ><span><a href="index.php?controller=donhang&key=<?php echo $key;?>&p=<?php echo $p;?>"><?php echo $p;?></a></span></li>
                             <?php
                            }
                             ?>  
                            </ul>
                        </div>  
</div>
</div>

                </form>                
                        </div>
                    </div>
             <!-- end content -->
                </div>
        </div>       
</div>