<?php
include '../../libraries/config.php';
include '../../libraries/class.database.php';
include '../../libraries/file_requick.php';
	
 

    
    $DB -> reset();
	$DB -> setTable('loainhanvien');
	$DB -> select();
    
	while($cot = $DB->fetch_array())
	{
		$arrLoaiNV['LoaiNV'][$cot['idloainhanvien']]=$cot['tenloainhanvien'];
		
	}
	$DB -> reset();
	$DB -> setTable('trangthailamviec');
	$DB -> select();
    
	while($cot = $DB->fetch_array())
	{
		$arrTrangthai[$cot['idtrangthailam']]=$cot['tentrangthai'];
		
	}
	
	$DB -> reset();
	$DB -> setTable('nhanvien');
	$DB->setWhereLike('hoten',$_GET['tutimkiem']);
	$DB	-> setOrder('idnhanvien DESC');

	

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemNV = '';
	while($cot = $DB->fetch_array($query))
	{
		if($cot['idloainhanvien']==1){
			continue;
		}
		foreach($arrLoaiNV['LoaiNV'] as $key => $value)
		{
			if($cot['idloainhanvien']==$key)
			{
				$loainhanvien = $value;
				break;
			}
		}
		$linkchitiet = $cot['idloainhanvien']==3 ? '<button id="bu'.$cot['idnhanvien'].'" onclick="xemKyNang('.$cot['idnhanvien'].')" href="#" class="btn btn-primary">Xem chi tiet</button>':'';
		$gioitinh = $cot['gioitinh']==1 ? 'Nam':'Nữ';
		foreach ($arrTrangthai as $key => $value)
		{
			if($cot['idtrangthai']==$key)
			{
				$isLam = $value;
				break;
			}
		}
		
		$NgaynghiLam = $cot['idtrangthai'] ==1? '':'- <strong>Ngày nghỉ làm: </strong>'.$cot['ngaynghilam'];
		$kynang = $cot['idloainhanvien'] == 3 ? '<p>- <strong>Kỹ năng:</strong>'.$linkchitiet.'</p>':'';
		$itemNV .='
		<tr>
											<td style="width:214px"><img src="../images/anhnhanvien/'.$cot['anh'].'" width="213" height="320" alt=""></td>
											<td style="word-break: break-all;">
												<div>
													<p>- <strong>Họ và Tên:</strong> '.$cot['hoten'].'</p>
													<p>- <strong>Tuổi:</strong>'.$cot['tuoi'].'</p>
													<p>- <strong>Giới tính:</strong>'.$gioitinh.'</p>
													<p>- <strong>Ngày sinh:</strong> '.$cot['ngaysinh'].'</p>
													<p>- <strong>Địa chỉ:</strong> '.$cot['diachi'].'</p>
													<p>- <strong>Số điện thoại:</strong>'.$cot['sodienthoai'].'</p>
													<p>- <strong>Email: </strong>'.$cot['email'].'</p>
													<p>- <strong>Ghi chú:</strong>'.$cot['ghichu'].'
													
													</p>
													<p>- <strong>Nhân viên: </strong>'.$loainhanvien.'</p>
													<p>- <strong>Lương:</strong> '.number_format($cot['luong'],0,",",".").' VNĐ</p>
													<p>- <strong>Bằng cấp: </strong>'.$cot['bangcap'].'</p>
													<p>- <strong>Ngày vào làm: </strong>'.$cot['ngayvaolam'].'</p>
													<p>'.$NgaynghiLam.'</p>
													<p>- <strong>Trang thái: </strong>'.$isLam.'</p>
													'.$kynang.'
													
													<div id="kqKyNang'.$cot['idnhanvien'].'"></div>
													<div class="text-center">
													<a href="suanhanvien.php?idnhanvien='.$cot['idnhanvien'].'" class="btn btn-primary">Chỉnh Sủa</a>
													<a href="#" onclick="xoaNhanVien('.$cot['idnhanvien'].')" class="btn btn-danger">Xóa</a>
													</div>
													
													<?>
												</div>
												
												
											</td>
									</tr>
				';
	}
	
	
?>
<!-- main content start-->
		
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th></th>
										<th class="text-center">Thông tin cá nhân</th>
										
									</tr>
							</thead> 
							<tbody> 
								<?php
									echo $itemNV;
								?>
										
								
							</tbody> 
								
						<tfoot>
							<tr>
								<td style="text-align:center" colspan = "2">
									<?php echo $DB->html();?>
								</td>
							</tr>
						</tfoot>
						</table> 
						
						
				
			
			
				
				
		
