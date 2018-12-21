<?php 
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
			
		
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
	$DB->setTable('loaithanhvien');
	$DB ->select();

	if($DB->num_rows()>0)
	{
		while($cot = $DB->fetch_array()){
			$itemLoaiKH[]= ' value="'.$cot['idloaithanhvien'].'">'.$cot['tenloaithanhvien'].'</option>';
		}
	}
	
	

	$DB -> reset();
	$DB -> setTable('thanhvien');
	$DB	-> setOrder('idthanhvien DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemKH = '';
	while($cot = $DB->fetch_array($query))
	{
		$gioitinh = $cot['gioitinh']==0 ? 'Nữ':'Nam';
		$itemSelect='';
		foreach($itemLoaiKH as $key => $value)
		{
				if($cot['idloaithanhvien'] ==($key+1)){
					$itemSelect .= '<option selected'.$value;
				}else
				{
					$itemSelect .= '<option'.$value;
				}
		}
		$itemKH .='
		<tr>
		<td style="width:214px"><img src="https://2.bp.blogspot.com/-OvzSvVKgZ-o/WKMFGVDf2bI/AAAAAAAAGYA/6nSIGSOOAmEpbfpfKsJ393SPT_FCHKPXgCEw/s320/anh4x6.jp" width="213" height="320" alt=""></td>
		<td style="word-break: break-all;">
			<div>
				<p>- <strong>Email: </strong>'.$cot['email'].'</p>
				<p>- <strong>Mật khẩu: </strong>'.$cot['matkhau'].'</p>
				<p>- <strong>Họ tên:</strong>'.$cot['hoten'].'</p>
				<p>- <strong>Địa chỉ: </strong>'.$cot['diachi'].'</p>
				<p>- <strong>Số điện thoại:</strong>'.$cot['sodienthoai'].'</p>
				<p>- <strong>Ngày sinh:</strong>'.$cot['ngaysinh'].'</p>
				<p>- <strong>Ngày tạo:</strong> '.$cot['ngaytao'].'</p>
				<p>- <strong>Giới Tính:</strong> '.$gioitinh.'</p>
				<p>- <strong>Ghi Chú:</strong> '.$cot['ghichu'].'
				
				</p>
				
				<p>- <strong>Khách hàng</strong><select name="selectThanhVien" onchange="ChangeLoaiThanhVien()"> '.$itemSelect.'</select></p>
				<br/>
				
				<p>- <a class="btn btn-primary">Lịch sử mua hàng</a></p>
				
				</div>
			
			</div>
			
			
		</td>
</tr>
				';
	}
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Khách hàng</h2>
					<form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-users"></i>
												</span>
												<input type="text" class="form-control1" placeholder="Tìm kiếm khách hàng">
												<span class="input-group-addon">
													<a href="#" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> </a>
												</span>
											</div>
										</div>
									</div>
								
								</form>
					<div class="table-responsive bs-example widget-shadow">
						
						<div id="dskh">
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th></th>
										<th class="text-center">Thông tin khách hàng</th>
										
									</tr>
							</thead> 
							<tbody> 
									<?php
										echo $itemKH;
									?>
								
									
										
								
							</tbody> 
								<tr>
									<td colspan="2" class="text-center"><?php echo $DB->html();?></td>
								</tr>
						
						</table> 
						</div>
						
					</div>
				</div>
			
				
				
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>