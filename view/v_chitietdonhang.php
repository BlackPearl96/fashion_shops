
<style type="text/css">
    .khachhang{width: 700px;margin-left: 250px ;}
    .chaouser{width: 300px ;margin: 0px auto;font-size: 24px;font-weight: bold;line-height: 24px;color: red}

</style>
<div class="khachhang">
<div class="chaouser">ĐƠN HÀNG CỦA <?php echo $_SESSION["loged_customer"]; ?></div><hr>
<div style="width:500px">
    
<table cellpadding="10" cellspacing="15" >
            <tr>
                <th>Hình ảnh</th>
                <th>Thông tin</th>
            </tr>
         <?php
        $total_price="0";
        foreach($arr_chitiet as $value)
        {
        ?>
            <tr>
                <td rowspan="5" style="text-align:center;"><img  src="<?php echo $value["anh_sanpham"];?>" style="width:150px" ></td>
            </tr>
            <tr>
                <td><?php echo $value["ten_sanpham"];?></td>
            </tr>
            <tr>
                <td>Đơn Giá: <?php echo number_format($value["gia"]);?>.đ</td>
            </tr>
            <tr>
                <td>Số lượng: <?php echo $value["soluong"];?></td>
            </tr>
             <tr>
                <td>Thành tiền: <?php echo number_format($value["soluong"]*$value["gia"]);?></td>
            </tr>
            
          
          <?php

        $total_price+=$value["soluong"]*$value["gia"];
        }
        
        ?>
   		<tr>
        <td>Tổng cộng: </td>
       
        <td style="margin-left:20px;"><b><?php echo number_format($total_price);?>.vnd</b></div></td>
        </tr>
    </table>
</div>
</div>