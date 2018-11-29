<div class="panel panel-primary">
       <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh sách tin tức</div>
       <div class="panel-body">
        <a class="btn btn-success pull-right" href="index.php?controller=add_edit_adv" role="button" style="margin-bottom:20px"><span class="glyphicon glyphicon-plus"> </span> thêm quảng cáo</a>
        <form  method="post" action="index.php?controller=news&act=delete_all" >
        <div class="form-group">
                            <!-- Single button -->
                            
                    
                            
                        </div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width:20px; text-align:center">STT</th>
              <th style="200px">Hình Ảnh</th>
              <th style="width:200px">Tên quảng cáo</th>
              <th style="width:400px">url</th>
               <th style="width:50px">vị trí</th>
              <th style="width:80px; text-align:center">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $stt=0;
            foreach($arr_adv as $value)
            {
              $stt++;
              ?>
              <tr>
              
               <td style=" text-align:center"><?php echo $stt;?></td>
               <td><img src="../<?php echo $value["anh"];?>" style="width:100px; height:100px;" ></td>
               <td><?php echo $value["ten_quangcao"];?></td>
              <td><?php echo $value["link"];?></td>
              <td><?php echo $value["vitri"] ?></td>
              <td style="width:80px; text-align:center">
                <a  href="index.php?controller=add_edit_adv&act=edit&id=<?php echo $value["id_quangcao"];?>" ><span class="glyphicon glyphicon-edit" ></span></a>
                /
                <a onclick="return window.confirm('có chắc xóa bài tin này');" href="index.php?controller=adv&act=delete&id_qc=<?php echo $value["id_quangcao"];?>" ><span class="glyphicon glyphicon-remove"></span></a>
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