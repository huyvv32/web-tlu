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
	$DB->setTable('ykienkhachhang');
	$DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	if($DB->num_rows()>0)
	{
		$itemYkienKH = '';
		while($cot = $DB->fetch_array())
		{
			$itemYkienKH .= '
            <tr>
            <td>'.$cot['idykienkhachhang'].'</td>
            <td>'.$cot['tenkhachhang'].'</td>
            <td class="text-center">'.$cot['anh'].'</td>
			<td class="text-center">'.$cot['diachi'].'</td>
			
        
        <td class="text-center">'.$cot['ngaytao'].'</td>
			
		
			<td class="text-center"><a href="suaykienkhachhang.php?idYKienKhachHang='.$cot['idykienkhachhang'].'" style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><a href="#" onclick ="xoaYKienKhachHang('.$cot['idykienkhachhang'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
			
		
        </tr>
        
			';
		}
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Thêm ý kiến khách hàng</h2>
					
					<div class="table-responsive bs-example widget-shadow">
						<h4><a href="themykienkhachhang.php" class="btn btn-primary">Thêm Ý kiến </a></h4>
						<div id="ykkh">
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th>STT</th>
                                        <th class="text-center">Tên khách hàng</th>
                                        <th class="text-center">Ảnh</th>
                                        <th class="text-center">Địa chỉ</th>
                                        <th class="text-center">Ngày tạo</th>
										<th class="text-center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
								 <?php
								 	echo $itemYkienKH;
								 ?>
                                   
									
										
								
							</tbody> 
								<tr>
									<td colspan="6" class="text-center">
										<?php
											echo $DB->html();
										?>
									</td>
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