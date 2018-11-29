<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
                
       <!-- content here -->
           <div class="panel panel-default">
               <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Chi Tiết Đơn Hàng</div>
               <div class="panel-body">
                
               <form id="category_form" method="post" action="index.php?controller=user&act=delete_all" role="form">

					<div class="col-xs-12">
	
                        <div class="form-group">
                            <!-- Single button -->
                        </div>


                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>CHI TIẾT KHÁCH HÀNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HỌ TÊN:</td>
                                    <td><?php echo $get_khachhang["fullname"]; ?></td>
                                </tr>
                                <tr>
                                    <td>SỐ ĐIỆN THOẠI:</td>
                                    <td>0<?php echo $get_khachhang["sdt"]; ?></td>
                                </tr>
                                <tr>
                                    <td>ĐỊA CHỈ:</td>
                                    <td><?php echo $get_khachhang["diachi"]; ?></td>
                                </tr>
                                <tr>
                                    <td>EMAIL:</td>
                                    <td><?php echo $get_khachhang["email"]; ?></td>
                                </tr>
                            </tbody>
                        </table>


                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20px; text-align:center"><input id="checkAll" type="checkbox"/></th>
                                    <th style="width:20px; text-align:center">STT</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số Lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							$stt=0;
							$total_price=0;
                            foreach($get_detail_order as $value)
							{
								
								$stt++;
							?>
                            	<tr>
                                	<td><input type="checkbox" id="checkAll" ></td>
                                    <td><?php echo $stt;?></td>
                                    <td><?php echo $value["ten_sanpham"];?></td>
                                    <td><img style="width:100px; height:100px;" src="../<?php echo $value["anh_sanpham"];?>" ></td>
                                    <td><?php echo $value["soluong"];?></td>
                                    <td><?php echo number_format($value["gia"]);?></td>
                                    <td><?php echo number_format($value["gia"]*$value["soluong"]);?></td>
                                </tr>
                            <?php
							$total_price+=$value["gia"]*$value["soluong"];
							}
							?>
                            <tr>
                                	<td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Tổng cộng:</td>
                                    <td><?php echo number_format($total_price);?>.vnd</td>
                                </tr>
                            </tbody>
                        </table>
	
                       <button type="button" class="btn btn-default"  ><a href="index.php?controller=donhang">Trở Về</a></button>	
</div>
</div>

				</form>                
                 		</div>
        			</div>
             <!-- end content -->
                </div>
        </div>       
</div>