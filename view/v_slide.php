<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script><script type="text/javascript">
$(function() {
	$('.neoslideshow img:gt(0)').hide();
	setInterval(function(){
      $('.neoslideshow :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.neoslideshow');}, 
      3000);
})
</script>

<style type="text/css">
	.neoslideshow {position:relative; width:980px; height:327px;}
.neoslideshow img {position:absolute;left:0; top:0;}
</style>
<?php 
	function list_slide()
	{
		global $link;
		$result=mysqli_query($link,"select * from tbl_slide");
		$arr=array();
		while ($row=mysqli_fetch_array($result)) {
			$arr[]=$row;
		}
		return $arr;
	}
	$arr_slide=list_slide()
 ?>
 
<div class="neoslideshow">
<?php 
	foreach ($arr_slide as $value) {
		
 ?>
  <img src="<?php echo $value["anh"] ?>" width="980" height="327" />

  <?php } ?>
</div>