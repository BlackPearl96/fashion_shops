
     <div class="panel panel-primary">
       <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh sách tin tức</div>
       <div class="panel-body">
        <a class="btn btn-success pull-right" href="index.php?controller=add_edit_news" role="button" style="margin-bottom:20px"><span class="glyphicon glyphicon-plus"> thêm tin tức</span></a>
        <form  method="post" action="index.php?controller=news&act=delete_all" >
        <div class="form-group">
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="submit" name="btl_delete" class="btn btn-primary">Xóa bản ghi</button>            
                            </div>
                    
                            
                        </div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:20px; text-align:center">STT</th>
              <th>Hình Ảnh</th>
              <th style="width:100px">Tiêu đề</th>
              <th>Nội dung</th>  
              <th style="width:100px">Ngày Đăng</th>
              <th style="width:80px; text-align:center">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $stt=0;
            foreach($arr_news as $value)
            {
              $stt++;
              ?>
              <tr>
               <td style=" text-align:center"><?php echo $stt;?></td>
               <td><img src="../<?php echo $value["hinhanh"];?>" style="width:100px; height:100px;" ></td>
               <td><?php echo $value["tieude"];?></td>
               <td>
                <div style="overflow:scroll;height:400px;width:500px">
                  <?php echo $value["noidung"] ?>
                </div>
              </td>
              <td><?php echo $value["ngaydang"];?></td>
              <td style="width:80px; text-align:center">
                <a  href="index.php?controller=add_edit_news&act=edit&id=<?php echo $value["id_tintuc"];?>" ><span class="glyphicon glyphicon-edit" ></span></a>
                /
                <a onclick="return window.confirm('có chắc xóa bài tin này');" href="index.php?controller=news&act=delete&id_tintuc=<?php echo $value["id_tintuc"];?>" ><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
</form>
        <div class="text-right">
          <ul class="pagination pull-right">
      <?php 
    for ($i=1; $i<=$num_page ; $i++) { 
     ?>
      <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      
      <?php } ?>
     </ul>
       </div>	
     </div>
   </div>
  


