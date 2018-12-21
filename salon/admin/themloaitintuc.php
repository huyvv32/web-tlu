<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
		case 6:	
		
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
	$d->reset();
	$d->setTable('nhanvien');
  
	$tranghientai = 1;
	$itemTintuc ='';
	$lagInitem = true;
	if(isset($_GET['trang']))
	{
	
	  // set 2 truong hop l anho hon va lon hon
	  $tranghientai = $_GET['trang']-1;
	  $d->phantrang();
	  if($tranghientai < 0||$tranghientai>$d->tongtrang)
	  {
	  
		$itemTintuc ='<h1>Trang không tồn tại</h1>';
		$lagInitem = false;
	  }
	  else
	  {
		$d->reset();
		 $d->setTable('nhanvien');
		$d->phantrang($tranghientai);
	  }
	
	
	}else
	{
	  $d->reset();
	  $d->setTable('nhanvien');
	  $d->phantrang($tranghientai-1);
   
	}
	
   
	$d->setOrder("IdNhanVien desc");
	$d->select();
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm Loại tin tức</h2><hr>
			<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Loại tin tức</label>
									<div class="col-sm-8">
										<input type="text" required class="form-control1" id="focusedinput" placeholder="Tên loại tin tức">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								
						
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
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