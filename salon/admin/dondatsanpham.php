<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
		case 4:	
		
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
	$DB->setTable('trangthaisanpham');
	$DB->select();
	if($DB->num_rows()>0)
	{
	
		while($cot = $DB->fetch_array())
		{
			$arrTrangThai[$cot['idtrangthai']]= $cot['tentrangthai'];

		}
		
	}
	

	$DB -> reset();
	$DB -> setTable('dondatsanpham');
	$DB->setWhere('idtrangthai',1);
	$DB	-> setOrder('iddondat DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='dondatsanpham.php';
	$DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	
	$itemDDV = '';
	while($cot = $DB->fetch_array($query))
	{
		
		$tennhanvien = $cot['idtrangthai']==2 ? '':$cot['tennhanvien'];
		switch($cot['idtrangthai'])
		{
			case 1:
			{
				$xuly = '<a href="xulydondatsanpham.php?iddondatsp='.$cot['iddondat'].'" class="btn btn-primary">Xử lý</a>';
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				
				break;
			}
			
			case 2:
			{
				$xuly = '<i class="fa fa-user"></i>';
				
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				break;
			}
						
					
			case 3:
			case 4:
			{
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 5:
			{
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 6:
			{
				$xuly = '<i class="fa fa-check"></i>';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			
		}
		
		$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
		$itemTrangThai .= '<option value="1" selected>Đã tiếp nhận đơn hàng</option>';
		$itemTrangThai .= '<option value="2" disabled>Đang xử lý</option>';
		$itemTrangThai .= '<option value="3" disabled>Đang giao</option>';
		$itemTrangThai .= '<option value="4" >Khách hang hủy</option>';
		$itemTrangThai .= '<option value="5" >Công ty hủy</option>';
		$itemTrangThai .= '<option value="6" disabled>Đã giao</option>';
			 
		$itemTrangThai .='</select>';
		$itemDDV .='
		
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddondat'].'</td>
										<td>'.$cot['tendangnhap'].'</td>
										
										<td style="    text-align: center;">'.$tennhanvien.'</td>
                                       
										<td style="    text-align: center;">Xem thêm</td>
										<td style="    text-align: center;">'.$xuly.'</td>
										<td style="    text-align: center;">'.$itemTrangThai.'</td>
                                       
										<td style="    text-align: center;"><a href="chitietdondathang.php?dondat='.$cot['iddondat'].'"><i class="fa fa-eye"></i></a></td>
										
										<td class="text-center">'.$chinhsua.'</td>
										
									</tr>
				';
	}
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Đơn đặt Sản phẩm</h2>
					<form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-users"></i>
												</span>
												<input type="text" id="tktenkhachangdatsp" class="form-control1" placeholder="Tìm kiếm tên khách hàng">
												
											</div>
										</div>
									</div>
								
								</form>
					<div class="table-responsive bs-example widget-shadow">
					<h4>
						 <a href="dondatsanpham.php" class="btn btn-primary" >Tiếp nhận đơh hàng</a> |
					
						 
						  <button onclick="dangChoXuLySP(<?php echo $_GET['page'];?>)" class="btn btn-primary">Đang chờ xử lý</button> | 
						
						  <button onclick="dangGiao(<?php echo $_GET['page'];?>)" class="btn btn-primary">Đang giao</button> 
                          <button onclick="khachHangHuySanPham(<?php echo $_GET['page'];?>)" class="btn btn-primary">Khách hang hủy</button> 
						  <button onclick="congTyHuySanPham(<?php echo $_GET['page'];?>)" class="btn btn-primary">Công ty hủy</button> | 
						  <button onclick="daGiao(<?php echo $_GET['page'];?>)"  class="btn btn-primary">Đã giao</button>
						  </h4>
						<div id="kqddsp">
						
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">ID</th>
										<th style="    text-align: center;">Tên khách hàng</th>
                                       
                                        <th style="    text-align: center;"> Tên Nhân viên</th>
                                        
										<th style="    text-align: center;">Xem thêm</th>
										<th style="    text-align: center;">Xử lý</th>
                                        <th style="    text-align: center;">Trạng thái</th>
                                      
										<th style="    text-align: center;">Chi tiết</th>
										<th style="width:127px;text-align:center">Sửa </th>
										
									</tr>
							</thead> 
							<tbody> 
							<?php
							 echo $itemDDV;
							?>
							</tbody> 
							<tfoot>
							<tr style="text-align:center">
								<td colspan="8">
								<?php
									echo $DB->html();
								?>
								</td>
							</tr>
								
							</tfoot>
							
						
						</table> 
						</div>
						
					</div>
				</div>
			
				
				
			</div>
		
		</div>
		
<?php
	include 'layout/footer.php';
?>