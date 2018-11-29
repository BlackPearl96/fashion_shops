<style type="text/css">
	.tin{width: 900px;height: 120px}
	.anh{float: left;width: 100px}
	.tieude{height: 100px;float: left;width: 700px;margin-left: 20px}
	.tieude1{color: black ;font-weight: bold;;font-size: 18px}
</style>
<?php 
	foreach ($arr_news as $value) {
		
	
 ?>
 <div class="tin">
 <a href="tin-tuc-<?php echo vn_str_filter($value["tieude"]); ?>-<?php echo $value["id_tintuc"]; ?>.html">
<div class="anh">
	<img src="<?php echo $value["hinhanh"];?>" style="width:100px; height:100px;" >
</div>
<br>
<div class="tieude">
	<p class="tieude1"><?php echo $value["tieude"];?></p>
	<br>
	<p>Đăng ngày: <?php echo $value["ngaydang"]; ?></p>
</div>
</a>
<hr style="clear:both">
</div>

<?php } ?>
<?php
for ($i=1; $i<=$num_page ; $i++) { 
		if($i!=1)
		{
     ?>
	<div style="clear:both;float:right;margin-right:50px" >
	<a class="page" href="index.php?controller=list_sp&p=<?php echo $i; ?>"><?php echo $i; ?></a>
	</div>
<?php }} ?>