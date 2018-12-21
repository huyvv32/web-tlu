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
		
		
		
		if(isset($_POST['themloaisanpham']))
		{
			
			$arrloaisanpham['tenloaisanpham'] = $_POST['tenloaisanpham'];
			$DB->reset();
			$DB->setTable('loaisanpham');
			if($DB->insert($arrloaisanpham))	
			{
							echo '<script>
				  			alert("Thêm thành công !");
				  			location.replace("danhsachloaisanpham.php");
						</script>';
			}
			else
			{
				echo '<script>
				  			alert("Thêm thất bại!");
				  		
						</script>';
			}
			
	
		}
		
   
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm loại sản phẩm</h2><hr>
			<form class="form-horizontal" method="POST">
							
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Tên loại sản phẩm</label>
									<div class="col-sm-8">
										<input type="text"   name="tenloaisanpham" required class="form-control1"  placeholder="Tên loại sản phẩm">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                               
							
								
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
									
									<button type="submit" name="themloaisanpham" class="btn btn-primary">Thêm</button>
									<a href="danhsachloaisanpham.php" class="btn btn-success">Hủy</a>
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