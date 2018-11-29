
     <!-- content here -->
     <div class="panel panel-default">
       <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh sach nhà sản xuất</div>
       <div class="panel-body">

         

           <div class="col-xs-12">

            <div class="form-group">                        
              <a href="index.php?controller=add_edit_category" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
            </div>
            <div>
              <div class="text-left">
                <ul class="pagination">

                  <li>
                    <?php 
                    foreach ($arr_nhomsp as $row) {
                     ?>
                     <a href="index.php?controller=category_product&id_nhomsp=<?php echo $row["id_nhomsp"]; ?>">
                     <span><?php echo $row["ten_nhomsp"]; ?></span>
                     </a>
                     <?php } ?>
                   </li>


                 </ul>
               </div>

             </div>

             <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  
                  <th style="width:20px; text-align:center">STT</th>
                  <th>Nhóm sản phẩm</th>
                  <th>Danh sách danh mục</th>
                  <th style="width:80px; text-align:center">Tác vụ</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $stt=0;
                  foreach ($arr_danhmuc as $row) {
                  $stt++;
                 ?>
               <tr>
          
                 <td style="width:20px; text-align:center"><?php echo $stt; ?></td>
                 <td>
                   <?php 
                      $nhomsanpham=get_nhomsp($row["id_nhomsp"]);
                      echo $nhomsanpham["ten_nhomsp"];
                    ?>
                 </td>

                 <td><?php echo $row["ten_danhmuc"]; ?></td>
                 <td>
                  <a href="index.php?controller=add_edit_category&act=edit&id=<?php echo $row["id_danhmuc"];?>"><span class="glyphicon glyphicon-pencil"></span></a>
                  / 
                  <a href="index.php?controller=category_product&act=delete&id_danhmuc=<?php echo $row["id_danhmuc"];?>"><span class="glyphicon glyphicon-remove"></span></a>

                </td>
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
