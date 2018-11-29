
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh sách sản phẩm</div>
                    	<div class="panel-body">
                	<form method="post" action="" role="form">

<div class="col-xs-12">
		<table style="margin-bottom:10px; width:100%">
        	<tr>
            	<td>
                	<div class="input-group">
					<input name="ten_sanpham" type="text" class="form-control" style="width:250px;" placeholder="Tìm tên sản phẩm">
                    &nbsp;
                    	<select class="form-control" name="id_nhomsp" style="width:200px; margin-left:10px;">
                        <option value="0">------</option>
                        	<?php

                                foreach ($arr_danhmuc as $row) {
                             ?>
                                <option value="<?php echo $row["id_danhmuc"]; ?>"><?php echo $row["ten_danhmuc"]; ?></option>
                            <?php } ?>
                        </select>
                    
                    <span style="padding-left:10px;"><input type="submit" class="btn btn-primary" value="Tìm kiếm"></span>
                    </div>
                </td>
                 <td>
                 <a class="btn btn-success pull-right" href="index.php?controller=add_edit_product" role="button" style="margin-bottom:20px"><span class="glyphicon glyphicon-plus"> thêm sản phẩm</span></a>
                </td>
            </tr>
          
               
        
        </table>
				
		
	
	<style>
	.table th{
		text-align:center;
		vertical-align:middle!important;
	}
	.table td{
		vertical-align: middle!important;
	}
	</style>
     
    <table class="table table-bordered table-hover">
		<thead>
			<tr>
                <th style="width:50px; text-align:center">Ảnh</th>
				<th>Tên sản phẩm</th>
                <th>danh mục</th>
                <th style="width:150px">Giá</th>
                <th>Mô tả</th>
				<th style="width:80px; text-align:center">Tác vụ</th>
			</tr>
		</thead>
		<tbody>
			<tr>
            <?php
                foreach ($arr_product as $row) {
                  
             ?>
				<td>
					<image src="../<?php echo $row["anh_sanpham"]; ?>" style="max-width:50px; max-height:50px;" />                </td>
				<td>
					<?php echo $row["ten_sanpham"]; ?>
				</td>
                <td style="text-align:center">
                <?php 
                    $danhmuc=get_danhmuc($row["id_danhmuc"]); 
                    echo $danhmuc["ten_danhmuc"]  
                ?>
                </td>
                <td style="text-align:center"><?php echo $row["gia"]; ?></td>
                <td><?php echo $row["mo_ta"]; ?></td>
				<td style="text-align:center">					
                    <a href="index.php?controller=add_edit_product&act=edit&id=<?php echo $row["id_sanpham"]; ?>" class="text-danger">Sửa</a>
                    &nbsp;
                    <a href="index.php?controller=product&id_sanpham=<?php echo $row["id_sanpham"]; ?>" class="text-danger" onClick="javascript:alert('bạn có chắc muốn xóa sản phẩm này');">Xóa</a>
				</td>
			</tr>
           		<?php } ?>		
		</tbody>
	</table>
	<div class="text-right">
          <ul class="pagination pull-right">
      <?php 
    for ($i=1; $i<=$num_page ; $i++) { 
     ?>
      <li><a href="index.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      
      <?php } ?>
     </ul>
       </div>   

</form>                
                 		</div>
        			</div>
             <!-- end content -->
                </div>