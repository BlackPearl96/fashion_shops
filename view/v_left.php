<div class="left">
			<div class="dmsp"><h1>DANH MỤC SẢN PHẨM</h1></div> <!-- Danh mục sản phẩm cột left  -->
			<div class="menu_pk">
				<div class="pk">
					<ul>
						<!--Thời Trang nữ  -->
						<li style="margin-top:15px;"><img src="images/images_html/icon.jpg"> 
							<?php 
							foreach ($arr_nhomsp as $value) {

								?>
								<a href="#">
									<?php
									echo $value["ten_nhomsp"];
									?>
								</a>
								<div class="line"></div>

								<ul class="dm">
									<?php 
									$arr_danhmuc=get_danhmuc($value["id_nhomsp"]);
									foreach ($arr_danhmuc as $value) {
										?>
										<li>
											<img src="images/images_html/icon1.jpg"><a href="-<?php 	echo vn_str_filter($value["ten_danhmuc"]); ?>-<?php echo $value["id_danhmuc"]; ?>.html"><span>
											<?php echo $value["ten_danhmuc"] ?></span></a>
										</li>

										<div class="line1"></div>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
							</ul>
						</div>
					</div>
					<!-- mạng xã hội -->
					<div class="face">
						<ul>
							<li><a href="https://www.facebook.com/profile.php?id=100009104901599" target="_blank"><img src="images/images_html/facebook.png" height="50" width="50"></a></li>
							<li><a href="#"><img style="margin-top:3px;" src="images/images_html/tw.jpg" height="50" width="50"></a></li>
							<li><a href="#"><img src="images/images_html/share.jpg" height="50" width="50"></a></li>
						</ul>
					</div>
				</div>
					