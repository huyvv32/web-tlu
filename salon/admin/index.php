<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		
		
			break;
		
		default:
			echo '<script>
			alert("Bạn chưa được cấp quyền.Mời bạn đăng nhập lại tài khoản");
			location.replace("dangnhap.php");
			</script>';
		
		
	}
}
else{
	
	header('location:dangnhap.php');
}
    include 'layout/header.php';
	

	$DB->reset();
	$DB->setTable('dichvu');
	$DB->select('iddichvu');
	$lstDichVu = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatdichvu');
	$DB->select('iddondat');
	$lstDonDat = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatdichvu');
	
	$DB->setWhereOr('idtrangthai','3');
	$DB->setWhereOr('idtrangthai','4');
	$DB->select('iddondat');
	$lstDonHuy = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatdichvu');
	
	$DB->setWhere('idtrangthai','5');
	
	$DB->select('iddondat');
	$lstDaXong = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatdichvu');
	
	$DB->setWhere('idtrangthai','2');
	
	$DB->select('iddondat');
	$lstDangXuLy = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatdichvu');
	$DB->setWhere('idtrangthai','');
	$DB->select('tien');
	$sumTienDonDat = 0;
	while($cot= $DB->fetch_array())
	{
		$sumTienDonDat += $cot['tien'];
	}
	$DB->reset();
	$DB->setTable('sanpham');
	$DB->select('idsanpham');
	$lstSanPham = $DB->num_rows();
	
	$DB->reset();
	$DB->setTable('dondatsanpham');
	$DB->select('iddondat');
	$lstDonDatSP = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatsanpham');
	
	$DB->setWhere('idtrangthai','2');
	
	$DB->select('iddondat');
	$lstDangXuLySP = $DB->num_rows();
	$DB->reset();
	$DB->setTable('dondatsanpham');
	
	$DB->setWhere('idtrangthai','3');
	
	$DB->select('iddondat');
	$lstDangGiaoSP = $DB->num_rows();

	
	
	$DB->setWhereOr('idtrangthai','4');
	$DB->setWhereOr('idtrangthai','5');
	$DB->select('iddondat');
	$lstDonHuySP = $DB->num_rows();

	$DB->reset();
	$DB->setTable('dondatsanpham');
	$DB->setWhere('idtrangthai','6');
	$DB->select('iddondat');
	$lstDaXongSP = $DB->num_rows();

	
?>
		<!-- main content start-->
		<div id="page-wrapper">
		<h2>Dịch vụ</h2><br>
			<div class="main-page">
				<div class="col_3">
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-dollar icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDichVu;?></strong></h5>
							<span>Dịch vụ</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDonDat;?></strong></h5>
							<span>Đơn Đặt</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDangXuLy;?></strong></h5>
							<span>Đang xử lý</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDonHuy;?></strong></h5>
							<span>Đơn Hủy</span>
							</div>
						</div>
					</div>
				
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDaXong;?></strong></h5>
							<span>Đã xong</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-money user2 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo number_format($sumTienDonDat);?></strong></h5>
							<span>Tổng Tiền</span>
							</div>
						</div>
					</div>
				
					<div class="clearfix"> </div>
				</div>
				
		
				
			</div>
			<br>
			<h2>Sản phẩm</h2><br>
			<div class="main-page">
				<div class="col_3">
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-dollar icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstSanPham;?></strong></h5>
							<span>Sản Phẩm</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDonDatSP;?></strong></h5>
							<span>Đơn Đặt</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDangXuLySP;?></strong></h5>
							<span>Đang xử lý</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDangGiaoSP;?></strong></h5>
							<span>Đang Giao</span>
							</div>
						</div>
					</div>
				
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDonHuySP;?></strong></h5>
							<span>Đơn hủy</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo $lstDaXongSP;?></strong></h5>
							<span>Đã Xong</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-money user2 icon-rounded"></i>
							<div class="stats">
							<h5><strong><?php echo number_format($sumTienDonDat);?></strong></h5>
							<span>Tổng Tiền</span>
							</div>
						</div>
					</div>
				
					<div class="clearfix"> </div>
				</div>
				
		
				
			</div>
			<br>	
			
			
		</div>
	<?php
		include 'layout/footer.php';
	?>
	