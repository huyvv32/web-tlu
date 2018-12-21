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

	
		if(isset($_POST['themdc']))
		{
			$arrDC['diachi'] = $_POST['diachi'];
			$arrDC['ngaylamviec'] = $_POST['ngaylamviec'];
			$arrDC['thoigianlamviec'] = $_POST['thoigianlamviec'];
			$arrDC['sodienthoai'] = $_POST['sodienthoai'];
			$arrDC['email'] = $_POST['email'];
			$arrDC['sky'] = $_POST['sky'];
			$arrDC['fb'] = $_POST['fb'];
			
			$DB->reset();
			$DB->setTable('thongtin');
			if($DB->insert($arrDC))
			{
				echo '<script>
				  alert("Thêm thành công !");
				  location.replace("danhsachdiachi.php");
				</script>';
			}
	
		}
	
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm địa chỉ</h2><hr>
			<form class="form-horizontal" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Địa chỉ</label>
									<div class="col-sm-8">
										<input type="text" name="diachi" required class="form-control" id="focusedinput" placeholder="Địa chỉ">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Ngày làm việc</label>
									<div class="col-sm-8">
										<input type="text" name="ngaylamviec" required class="form-control" id="focusedinput" placeholder="Ngày làm việc">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Giờ làm việc</label>
									<div class="col-sm-8">
										<input type="text" name="thoigianlamviec" required class="form-control" id="focusedinput" placeholder="Giờ làm việc">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Số điện thoại</label>
									<div class="col-sm-8">
										<input type="text" name="sodienthoai" required class="form-control" id="focusedinput" placeholder="Số điên thoại">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" name="email" required class="form-control" id="focusedinput" placeholder="Email">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Skype</label>
									<div class="col-sm-8">
										<input type="text" name="sky" required class="form-control" id="focusedinput" placeholder="Skype">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Facebook</label>
									<div class="col-sm-8">
										<input type="text" name="fb" required class="form-control" id="focusedinput" placeholder="Facebook">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                
                              
							
						
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit" name="themdc" class="btn btn-primary">Thêm</button>
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
							</form>
			
				
				
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>