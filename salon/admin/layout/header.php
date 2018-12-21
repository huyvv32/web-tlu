<?php
	session_start();
	if(isset($_SESSION['taikhoan']))
	{
		include '../libraries/config.php';
		include '../libraries/class.database.php';
		include '../libraries/file_requick.php';
		if(isset($_GET['thoat']))
		{
			unset($_SESSION['taikhoan']);
		}
		$idLoaiTaikhoan = $_SESSION['taikhoan']['idloaitaikhoan'];
		$tenTaiKhoan = $_SESSION['taikhoan']['tentaikhoan'];
		$anhTaiKhoan = $_SESSION['taikhoan']['anh'];
		$itemThongbao = '';
		$itemTaiKhoan = '
		<span class="prfil-img"><img src="images/'.$anhTaiKhoan.'" alt=""> </span> 
		<div class="user-name">
			<p>xin chào '.$tenTaiKhoan.'</p>
			<span><a href="?thoat=true">Đăng xuất</a></span>
		</div>
		';
		$DB->reset();
							$DB ->setTable('lienhe');
							$DB->setWhere('xuly','0');
							$DB->select();
							$countLienHe = $DB->num_rows();

							$DB->reset();
							$DB ->setTable('dondatdichvu');
							$DB->setWhere('idtrangthai','1');
							$DB->select();
							$countDichVu = $DB->num_rows();
							
							$DB->reset();
							$DB ->setTable('dondatsanpham');
							$DB->setWhere('idtrangthai','1');
							$DB->select();
							$countSanPham = $DB->num_rows();
		switch($idLoaiTaikhoan)
		{
			case 1:{
				$itemThongbao='
				<li class="dropdown head-dpdn">
							<a href="lienhe.php" class="dropdown-toggle"  ><i class="fa fa-envelope"></i><span class="badge">'.$countLienHe.'</span></a>
							
						</li>
						
						<li class="dropdown head-dpdn">
							<a href="dondatdichvu.php" class="dropdown-toggle"  ><i class="fa fa-tasks "></i><span class="badge blue">'.$countDichVu.'</span></a>
							
						</li>	
						<li class="dropdown head-dpdn">
						<a href="dondatsanpham.php" class="dropdown-toggle"  ><i class="fa fa-bell "></i><span class="badge blue">'.$countSanPham.'</span></a>
							
							
						</li>	';
				$listMenu = '
				<li class="header">Quản lý</li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Dịch vụ</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                
				  <li><a href="danhsachdichvu.php"><i class="fa fa-angle-right"></i>Danh sách dịch vụ</a></li>
				  <li><a href="dondatdichvu.php"><i class="fa fa-angle-right"></i>Đơn đặt dịch vụ</a></li>
                </ul>
			  </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Sản Phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="danhsachloaisanpham.php"><i class="fa fa-angle-right"></i>Danh sách loại sản phẩm</a></li>
				  <li><a href="dssanpham.php"><i class="fa fa-angle-right"></i>Danh sách sản phẩm</a></li>
				  <li><a href="dondatsanpham.php"><i class="fa fa-angle-right"></i>Đơn đặt hàng</a></li>
                </ul>
			  </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-comment-o"></i>
                <span>Tin tức</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="loaitintuc.php"><i class="fa fa-angle-right"></i>Loại tin tức</a></li>
                  <li><a href="danhsachtintuc.php"><i class="fa fa-angle-right"></i>Danh sách tin tức</a></li>
                </ul>
			  </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-users"></i>
                <span>Khách Hàng</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="danhsachloaikhachhang.php"><i class="fa fa-angle-right"></i>Loại khách hàng</a></li>
                  <li><a href="danhsachkhachhang.php"><i class="fa fa-angle-right"></i>Danh sách khách hàng</a></li>
                </ul>
			  </li>
			 
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Nhân Viên</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="danhsachloainhanvien.php"><i class="fa fa-angle-right"></i>Danh sách Loại Nhân Viên</a></li>
                  <li><a href="danhsachnhanvien.php"><i class="fa fa-angle-right"></i>Danh sách nhân viên</a></li>
                </ul>
			  </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Thống kê</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="thongkedondatdichvu.php"><i class="fa fa-angle-right"></i>Đơn đặt dịch vụ</a></li>
                  <li><a href="thongkedondatsanpham.php"><i class="fa fa-angle-right"></i>Đơn đặt sản phẩm</a></li>
                </ul>
			  </li>
			  <li><a href="ykienkhachhang.php"><i class="fa fa-clipboard"></i> <span>Ý kiến khách hàng</span></a></li>
			  <li><a href="daotao.php"><i class="fa fa-pencil-square-o text-red"></i> <span>Đào tạo</span></a></li>
			  <li><a href="anhtrungtam.php"><i class="fa fa-picture-o text-red"></i> <span>Ảnh trung tâm</span></a></li>
			  <li><a href="danhsachbando.php"><i class="fa fa-map-marker text-red"></i> <span>Bản đồ</span></a></li>
			
			  <li cla<li><a href="danhsachdiachi.php"><i class="fa fa-clipboard"></i> <span>Cơ sở</span></a></li>
			  <li><a href="lienhe.php"><i class="fa fa-envelope-o"></i> <span>Liên hệ</span></a></li>
				
				';
			}
			break;
			case 2:
				{
					$itemThongbao='
					<li class="dropdown head-dpdn">
							<a href="lienhe.php" class="dropdown-toggle"  ><i class="fa fa-envelope"></i><span class="badge">'.$countLienHe.'</span></a>
							
						</li>
						
						<li class="dropdown head-dpdn">
							<a href="dondatdichvu.php" class="dropdown-toggle"  ><i class="fa fa-tasks "></i><span class="badge blue">'.$countDichVu.'</span></a>
							
						</li>	
						<li class="dropdown head-dpdn">
						<a href="dondatsanpham.php" class="dropdown-toggle"  ><i class="fa fa-bell "></i><span class="badge blue">'.$countSanPham.'</span></a>
							
							
						</li>	
					';
					$listMenu='	<li class="header">Quản lý</li>
					<li class="treeview">
					  <a href="#">
					  <i class="fa fa-laptop"></i>
					  <span>Dịch vụ</span>
					  <i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu" style="display: none;">
					  
						<li><a href="danhsachdichvu.php"><i class="fa fa-angle-right"></i>Danh sách dịch vụ</a></li>
						<li><a href="dondatdichvu.php"><i class="fa fa-angle-right"></i>Đơn đặt dịch vụ</a></li>
					  </ul>
					</li>
					<li class="treeview">
					  <a href="#">
					  <i class="fa fa-bar-chart-o"></i>
					  <span>Sản Phẩm</span>
					  <i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu" style="display: none;">
						<li><a href="danhsachloaisanpham.php"><i class="fa fa-angle-right"></i>Danh sách loại sản phẩm</a></li>
						<li><a href="dssanpham.php"><i class="fa fa-angle-right"></i>Danh sách sản phẩm</a></li>
						<li><a href="dondatsanpham.php"><i class="fa fa-angle-right"></i>Đơn đặt hàng</a></li>
					  </ul>
					</li>
					<li class="treeview">
					  <a href="#">
					  <i class="fa fa-comment-o"></i>
					  <span>Tin tức</span>
					  <i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu" style="display: none;">
						<li><a href="loaitintuc.php"><i class="fa fa-angle-right"></i>Loại tin tức</a></li>
						<li><a href="danhsachtintuc.php"><i class="fa fa-angle-right"></i>Danh sách tin tức</a></li>
					  </ul>
					</li>
					<li class="treeview">
					  <a href="#">
					  <i class="fa fa-users"></i>
					  <span>Khách Hàng</span>
					  <i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu" style="display: none;">
						<li><a href="danhsachloaikhachhang.php"><i class="fa fa-angle-right"></i>Loại khách hàng</a></li>
						<li><a href="danhsachkhachhang.php"><i class="fa fa-angle-right"></i>Danh sách khách hàng</a></li>
					  </ul>
					</li>
				   
					<li class="treeview">
					  <a href="#">
					  <i class="fa fa-user"></i>
					  <span>Nhân Viên</span>
					  <i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu" style="display: none;">
						<li><a href="danhsachloainhanvien.php"><i class="fa fa-angle-right"></i>Danh sách Loại Nhân Viên</a></li>
						<li><a href="danhsachnhanvien.php"><i class="fa fa-angle-right"></i>Danh sách nhân viên</a></li>
					  </ul>
					</li>
					
					<li><a href="ykienkhachhang.php"><i class="fa fa-clipboard"></i> <span>Ý kiến khách hàng</span></a></li>
					<li><a href="daotao.php"><i class="fa fa-pencil-square-o text-red"></i> <span>Đào tạo</span></a></li>';
				}
				break;
			case 3:
				{
					$itemThongbao='
					
						
						<li class="dropdown head-dpdn">
							<a href="dondatdichvu.php" class="dropdown-toggle"  ><i class="fa fa-tasks "></i><span class="badge blue">'.$countDichVu.'</span></a>
							
						</li>	
							';
					$listMenu='
					<li class="header">Quản lý</li>
					<li class="treeview">
					<a href="#">
					<i class="fa fa-laptop"></i>
					<span>Dịch vụ</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu" style="display: none;">
					
					  <li><a href="danhsachdichvu.php"><i class="fa fa-angle-right"></i>Danh sách dịch vụ</a></li>
					  <li><a href="dondatdichvu.php"><i class="fa fa-angle-right"></i>Đơn đặt dịch vụ</a></li>
					</ul>
				  </li>';
				}
				break;
			case 4:
				{
					$itemThongbao='
					
						<li class="dropdown head-dpdn">
						<a href="dondatsanpham.php" class="dropdown-toggle"  ><i class="fa fa-bell "></i><span class="badge blue">'.$countSanPham.'</span></a>
							
							
						</li>	
					';
					$listMenu='
					<li class="header">Quản lý</li>
					<li class="treeview">
					<a href="#">
					<i class="fa fa-bar-chart-o"></i>
					<span>Sản Phẩm</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu" style="display: none;">
					  <li><a href="danhsachloaisanpham.php"><i class="fa fa-angle-right"></i>Danh sách loại sản phẩm</a></li>
					  <li><a href="dssanpham.php"><i class="fa fa-angle-right"></i>Danh sách sản phẩm</a></li>
					  <li><a href="dondatsanpham.php"><i class="fa fa-angle-right"></i>Đơn đặt hàng</a></li>
					</ul>
				  </li>
					';
				}
				break;
			case 5:
				{
					$itemThongbao='
					<li class="dropdown head-dpdn">
							<a href="lienhe.php" class="dropdown-toggle"  ><i class="fa fa-envelope"></i><span class="badge">'.$countLienHe.'</span></a>
							
						</li>
						
					
					';
					$listMenu=' <li class="header">Quản lý</li><li><a href="lienhe.php"><i class="fa fa-envelope-o"></i> <span>Liên hệ</span></a></li>';
				}
				break;
			case 6:
				{
					$listMenu='<li class="header">Quản lý</li>
					<li class="treeview">
                <a href="#">
                <i class="fa fa-comment-o"></i>
                <span>Tin tức</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li><a href="loaitintuc.php"><i class="fa fa-angle-right"></i>Loại tin tức</a></li>
                  <li><a href="danhsachtintuc.php"><i class="fa fa-angle-right"></i>Danh sách tin tức</a></li>
                </ul>
			  </li>
					';
				}
				break;
			default:
				echo '<script>
				alert("Bạn chưa được cấp quyền");
				location.replace("dangnhap.php");
				</script>';
			
			
		}
	}
	else
	{
		header('location:dangnhap.php');
	}
	
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
							
					
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>

<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
						<style>
						.listDV li {
							list-style-type: none;
    float: LEFT;
    margin-right: 23px;
						}
						@media only screen and (max-width: 600px) {
    body {
        background-color: lightblue;
    }
}
							.col-md-3.widget{
								margin-bottom:17px;
							}
						
						</style>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="sidebar-menu">
			  <?php
			 	echo $listMenu; 
			  ?>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
		<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<?php
							echo $itemThongbao;
						?>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<?php
										echo $itemTaiKhoan;
									?>
									<div class="clearfix"></div>	
								</div>	
							</a>
							
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->