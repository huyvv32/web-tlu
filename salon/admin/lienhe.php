<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
			
		case 5:
			
			break;
		
		default:
			echo '<script>
			alert("Bạn chưa được cấp quyền");
			
			</script>';
		
		
	}
}
else{
	
	header('location:dangnhap.php');
}
    include 'layout/header.php';

	$DB -> reset();
	$DB -> setTable('lienhe');
	$DB	-> setOrder('idlienhe DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	 
	$itemLH = '';
	while($cot = $DB->fetch_array($query))
	{
		$trangthai = $cot['trangThai']==0 ? '<a class="btn btn-primary"><i class="fa fa-phone"></i></a><a class="btn btn-success" href="#"><i class="fa fa-envelope-o"></i></a>':"Đã Xử Lý";
		$itemLH .='
		<tr> 
									<th scope="row">'.$cot['idlienhe'].'</th>
									 <td>'.$cot['hoten'].'</td>
									
									 <td>'.$cot['email'].'</td>
									  <td>'.$cot['sodienthoai'].'</td>
									 
										<td>'.$cot['ngaynhan'].'</td>
                                        <td>'.$cot['noidung'].'</td>
                                        <td>'.$trangthai.'</td>
									 </tr>
				';
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Liên hệ</h2>
			
					<div class="table-responsive bs-example widget-shadow">
						
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>STT</th> 
									<th>Tên</th> 
									<th style="width: 324px;">Email</th> 
									<th style="width: 146px;">Số Điện Thoại</th> 
									<th style="width: 152px;">Ngày Nhận</th> 
									<th style="width: 130px;">Nội dung</th> 
                                    <th style="width: 130px;">Xử lý</th> 
									
								</tr> 
							</thead> 
							<tbody> 
								<?php
								     echo $itemLH;
								?>
							</tbody> 
								
							<tfoot class="text-center">
							<tr>
									<td colspan="7" class="text-center">
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
<?php
	include 'layout/footer.php';
?>