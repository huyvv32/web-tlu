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
	$DB -> reset();
	$DB -> setTable('loaithanhvien');
	$DB -> select();
	 
	$itemLNV = '';
	while($cot = $DB->fetch_array($query))
	{
		if($cot['idloaithanhvien']==1)
		{
			$itemLNV .='
		<tr> 
								
									 <td>'.$cot['tenloaithanhvien'].'</td>
									 <td>'.$cot['phantramuudai'].' %</td>
									
										
									 </tr>
				';
		}else
		{
			$itemLNV .='
		<tr> 
								
									 <td>'.$cot['tenloaithanhvien'].'</td>
									 <td>'.$cot['phantramuudai'].' %</td>
									
										<td class="text-center"><a href="sualoaikhachhang.php?idloaithanhvien='.$cot['idloaithanhvien'].'" style="margin-right: 17px" href="#" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a><button  onclick="xoaLoaiKhachHang('.$cot['idloaithanhvien'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
									 </tr>
				';
		}
		
	}
	
?>
<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Loại Khách hàng</h2>
			
					<div class="table-responsive bs-example widget-shadow">
						<h4><a href="themloaikhachhang.php" class="btn btn-primary">Thêm Loại Khách hàng</a></h4>
						<div id="kqlkh">
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								
									<th>Khách Hàng</th>
									<th>Phần trăm ưu đãi</th> 
                                    <th class="text-center">Sửa | Xóa</th> 
								</tr> 
							</thead> 
							<tbody> 
								<?php
								      echo $itemLNV;
									 ?>
							</tbody> 
								
						</table> 
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>