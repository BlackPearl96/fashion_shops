	<script type="text/javascript">
		(function($) {
			$(function() {
				$(".slideshow").simplyScroll({orientation:'vertical',customClass:'vert'});
			});
		})(jQuery);
	</script>
	

	<!-- giao diện center -->
	<div class="center">
		<div class="phukien">
			<!-- Box thời trang nổi bật -->
			<div class="sp"><a href="#"><p style="color:#FFF; text-align:left; line-height:30px; font-weight:bold; padding-left:10px;">Thời Trang Nổi Bật</p></a></div>
			<?php 
			foreach ($arr_thoitrang_hot as $value) {
				?>
				<div class="box_sp"><a href="<?php echo $value["id_sanpham"]; ?>-chi-tiet-san-pham-<?php echo vn_str_filter($value["ten_sanpham"]) ?>.html"><img src="<?php echo $value["anh_sanpham"]; ?>" style=" width:160px; height:150px;"><p style="text-align:center; margin-top:5px;height:20px"><?php echo $value["ten_sanpham"]; ?></p></a>
					<br/>
					<p style="color:#F00; text-align:center">Giá:<span style="font-weight:bold"><?php echo number_format($value["gia"]); ?>VND</span></p>
					<div class="dathang"><a href="index.php?controller=cart&act=add&id_sanpham=<?php echo $value["id_sanpham"]; ?>"><p style="color:#FFF; font-weight:bold">Thêm Vào Giỏ Hàng</p></a></div>
				</div>
				<?php } ?>


			</div>





			<!-- Phụ Kiện nổi bật -->
			<div class="phukien">
				<div class="sp2"><a href="#"><p style="color:#FFF; text-align:left; line-height:30px; font-weight:bold; padding-left:10px;">Phụ Kiện Nổi Bật</p></a></div>
				<?php 
				foreach ($arr_phukien_hot as $value) {
					?>
					<div class="box_sp"><a href="<?php echo $value["id_sanpham"]; ?>-chi-tiet-san-pham-<?php echo vn_str_filter($value["ten_sanpham"]) ?>.html"><img src="<?php echo $value["anh_sanpham"]; ?>" style=" width:155px; height:150px;"><p style="text-align:center; margin-top:5px;height:20px"><?php echo $value["ten_sanpham"]; ?></p></a>
						<br/>
						<p style="color:#F00; text-align:center">Giá:<span style="font-weight:bold"><?php echo number_format($value["gia"]); ?>VND</span></p>
						<div class="dathang"><a href="index.php?controller=cart&act=add&id_sanpham=<?php echo $value["id_sanpham"]; ?>"><p style="color:#FFF; font-weight:bold">Thêm Vào Giỏ Hàng</p></a></div>
					</div>
					<?php } ?>

				</div>





				<div class="mypham">				
					<!-- Mỹ Phẩm Nổi Bật -->
					<div class="sp2"><a href="#"><p style="color:#FFF; text-align:left; line-height:30px; font-weight:bold; padding-left:10px;">Mỹ Phẩm Nổi Bật</p></a></div>
					<?php 
					foreach ($arr_mypham_hot as $value) {
						?>
						<div class="box_sp"><a href="<?php echo $value["id_sanpham"]; ?>-chi-tiet-san-pham-<?php echo vn_str_filter($value["ten_sanpham"]) ?>.html"><img src="<?php echo $value["anh_sanpham"]; ?>" style=" width:120px"><p style="text-align:center; margin-top:5px;height:20px"><?php echo $value["ten_sanpham"]; ?></p></a>
							<br/>
							<p style="color:#F00; text-align:center">Giá:<span style="font-weight:bold"><?php echo number_format($value["gia"]); ?>VND</span></p>
							<div class="dathang"><a href="index.php?controller=cart&act=add&id_sanpham=<?php echo $value["id_sanpham"]; ?>"><p style="color:#FFF; font-weight:bold">Thêm Vào Giỏ Hàng</p></a></div>
						</div>
						<?php } ?>

					</div>
					<!-- The End Center -->
				</div>									




				<div class="right">
					<!-- Sản Phẩm bán chạy -->        
					<div class="spm"><h1>SẢN PHẨM BÁN CHẠY</h1></div>
					<!-- slide show sản phẩm bán chạy -->
					<div class="slideshow">
						<?php
						foreach ($arr_sp as $value) {
										 $arr_sp_hot=list_sp_hot($value["id_sanpham"]); 		  	# 
							?>
							<div class="box"><a href="<?php echo $arr_sp_hot["id_sanpham"]; ?>-chi-tiet-san-pham-<?php echo vn_str_filter($arr_sp_hot["ten_sanpham"]) ?>.html"><img src="<?php echo $arr_sp_hot["anh_sanpham"]; ?>" style="width:203px;height:190px;"></a>
								<br/>
								<br/>
								<p style="text-align:center;font-weight:bold"><?php
									
									echo $arr_sp_hot["ten_sanpham"]; ?></p><br/>
								<p style="text-align:center;color:#F00"><?php echo number_format($arr_sp_hot["gia"]); ?>VND</p>
							</div>
							<div class="line1"></div>
							<?php } ?>
						</div>

						<!-- query cho tin tức mới -->
						<div class="tintuc"><h1>TIN TỨC MỚI</h1></div>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
						<script type="text/javascript" src="js/jquery.vticker.js"></script>
						<script type="text/javascript">
							$(function() {
								$('.show').vTicker({ 
									speed: 500,
									pause: 3000,
									animation: 'fade',
									mousePause: true,
									showItems: 3
								});
							});
						</script>

						<div class="show">
							<ul>
								<?php foreach ($arr_news as $value) {
									?>
									<li>
										<div class="anh_tin">
											<img src="<?php echo $value["hinhanh"]; ?>" height="80px;" width="80px">
											<a href="tin-tuc-<?php echo vn_str_filter($value["tieude"]); ?>-<?php echo $value["id_tintuc"]; ?>.html"><?php echo $value["tieude"]; ?></a>
										</div>
									</li> 
									<?php } ?>
								</ul>
							</div>

							<!--Box hộ trợ online-->
							<div class="htonline"><h1>Hỗ Trợ Online</h1></div>
							<div class="box_online">
								<ul>
									<li>
										<img  src="images/images_html/girl.gif">
										<br/>
										<span style="color:#00F; font-weight:bold;">Bán Hàng Online</span>
										<br/>
										<a href=”ymsgr:sendIM?mongmotngaygapem_90“><img style="margin-top:5px; margin-bottom:5px;" border=”0″ src="images/images_html/yahoo_online.gif"></a>
										<b style="color:#00D936;">Sales1@xinhshop.com.vn</b>
									</li>
									<li>
										<img  style="margin-top:10px;" src="images/images_html/men.gif">
										<br/>
										<span style="color:#00F; font-weight:bold;">Bán Hàng Online</span>
										<a href=”ymsgr:sendIM?mongmotngaygapem_90“><img style="margin-top:5px; margin-bottom:5px;" border=”0″ src="images/images_html/yahoo_online.gif"></a>
										<b style="color:#00D936;">Sales2@xinhshop.com.vn</b>
									</li>
								</ul>
							</div>

							<!-- Box thống kê truy cập  -->
							<div class="tk_online"><h1>Thống Kê Truy Cập</h1></div>
							<div class="box_tk">
								<ul>
									<li><img src="images/images_html/list-style-image.png" height="10" width="10">Số Lượng Online :
										<?php
										$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];

										$tg=time();
										$tgout=1000;
										$tgnew=$tg - $tgout;


											$query=mysqli_query($link,"insert into tbl_online(tgtmp,ip) values('$tg','$REMOTE_ADDR')");

											$query=mysqli_query($link,"delete from tbl_online where tgtmp < $tgnew");

											$query=mysqli_query($link,"SELECT DISTINCT ip FROM tbl_online WHERE ip='$REMOTE_ADDR'");

											$user = mysqli_num_rows($query);
											echo "$user";


											?></li>
											<li><img src="images/images_html/list-style-image.png" height="10" width="10">Số Lượng Truy Cập : 25</li>
										</ul>
									</div>
									<div class="box_qc" style="float:left; margin-top:10px;"><a href="#"><img src="images/images_qc/1456740434-300x450.gif" height="300" width="203"></a></div>
								</div>
								

								<!-- Footer -->
							</body>
							</html>
