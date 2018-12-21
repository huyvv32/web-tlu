			<div class="top-bar w3-1" style="background:#1212ef">
				<div class="container">
					<div class="header-nav w3-agileits-1">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
						
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
								
								
									
									<?php
										if(isset($_SESSION['dangnhap']))
										{
											echo '<li><a  href="dangky.php"><i class="glyphicon glyphicon-user"></i> Xin chào: '.$_SESSION['dangnhap']['ten'].'</a></li>';
											echo '<li><a href="'.$_SERVER['PHP_SELF'].'?thoat=true" ><i class="glyphicon glyphicon-log-out"></i> Thoát</a></li>';
										}
										else
										{
											echo '<li><a  href="dangky.php"><i class="glyphicon glyphicon-star-empty"></i> Đăng ký</a></li>';
											echo '<li><a href="dangnhap.php" ><i class="glyphicon glyphicon-star-empty"></i> Đăng nhập</a></li>';
										}
									?>
									
									
									<li id="contentGH"><?php
										if(isset($_SESSION['giohang'])&&count($_SESSION['giohang'])!=0)
										{
											$tongtien = 0 ;
											$tongSP = 0;
											foreach($_SESSION['giohang'] as $value)
											{
												$tongtien += $value['soluong']*$value['dongia'];
												$tongSP++;
											}
											echo '<a href="giohang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <span>'.number_format($tongtien).'</span> (<span>'.$tongSP.'</span> SP)</a>';
										}
										else
										{
											echo 	'<a href="giohang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <span>0 VND</span> (<span>0</span> SP)</a>';
										}

									?></li>
									<li><a href="#" onclick="lamMoiGioHang()">Làm mới</a></li>
								</ul>
							</div><!-- /navbar-collapse -->
							
							<div class="clearfix"></div>
						</nav>
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->
			<!-- Top-Bar -->
			<div class="top-bar w3-1"  style="background:#cac62e">
				<div class="container">
					<div class="header-nav w3-agileits-1">
						<nav class="navbar navbar-default navbar-fixed-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1><a class="navbar-brand" href="index.php">Anger Spa</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									<li><a class=" active" href="index.php">Trang chủ</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal"> Giới thiệu</a></li>
									<li><a href="danhsachdichvu.php" >Dịch vụ</a></li>
									<li><a  href="sanpham.php">Sản phẩm</a></li>									
									<li><a href="tintuc.php" >Tin tức</a></li>
									<!--
									<li><a href="index.php?#album" >Album</a></li>
									<li><a href="index.php?#daotaonghe" >Đào tạo nghề</a></li>
									<li><a href="index.php?#ykienkhachhang">Ý kiến khách hàng</a></li>
									-->
									<li><a href="#" data-toggle="modal" data-target="#coso"> Cơ sở</a></li>
									<li><a href="index.php?#contact" >Liên hệ</a></li>
								</ul>
							</div><!-- /navbar-collapse -->
							
							<div class="clearfix"></div>
						</nav>
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->