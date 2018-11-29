
     <div class="panel panel-primary">
       <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh Sách Ảnh</div>
       <div class="panel-body">
        <a class="btn btn-success pull-right" href="index.php?controller=add_edit_slide" role="button" style="margin-bottom:20px"><span class="glyphicon glyphicon-plus"></span> Thêm Ảnh</a>
        <form  method="post" action="index.php?controller=slide&act=delete_all" >
        <div class="form-group">
                            <!-- Single button -->
                    
                            
                        </div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:20px; text-align:center;">STT</th>
              <th style="width:200px;">Hình Ảnh</th>
              <th style="width:80px; text-align:center">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $stt=0;
            foreach($arr_slide as $row)
            {
              $stt++;
              ?>
              <tr>
               <td style=" text-align:center"><?php echo $stt;?></td>
               <td><img src="../<?php echo $row["anh"]?>" style="width:400px; height:200px;" ></td>
              <td style="width:80px; text-align:center">
                <a  href="index.php?controller=add_edit_slide&act=edit&id=<?php echo $row["id_slide"];?>" ><span class="glyphicon glyphicon-edit" ></span></a>
                
                <a onclick="return window.confirm('có chắc xóa bài tin này');" href="index.php?controller=slide&id_slide=<?php echo $row["id_slide"];?>" ><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
</form>
     </div>
   </div>
  


