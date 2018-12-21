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
	$DB->setTable('loaisanpham');
	$DB->select();
	if($DB->num_rows()>0)
	{
		$itemLoaiSP = '';
		while($cot = $DB->fetch_array())
		{
			$itemLoaiSP .= '
			<tr>
			<td>'.$cot['tenloaisanpham'].'</td>
			<td class="text-center"><a href="sualoaisanpham.php?idloaisanpham='.$cot['idloaisanpham'].'" style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
			
		</tr>
			';
		}
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Loại Sản phẩm</h2>
					
					<div class="table-responsive bs-example widget-shadow">
						<h4><a href="themloaisanpham.php" class="btn btn-primary">Thêm Loại Sản phẩm</a></h4>
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th>Loại sản phẩm</th>
										<th class="text-center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
								 <?php
								 	echo $itemLoaiSP;
								 ?>
                                   
									
										
								
							</tbody> 
								<tr>
									<td colspan="2" class="text-center">
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
<?php
	include 'layout/footer.php';
?>