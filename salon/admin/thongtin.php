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
			<div class="tables">
					<h2 class="title1">Thông tin</h2>
					<form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-users"></i>
												</span>
												<input type="text" class="form-control1" placeholder="Tìm kiếm của hàng">
												<span class="input-group-addon">
													<a href="#" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> </a>
												</span>
											</div>
										</div>
									</div>
								
								</form>
					<div class="table-responsive bs-example widget-shadow">
						<h4><a href="themmoidichvu.php" class="btn btn-primary">Thêm Cửa hàng</a></h4>
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">Địa chỉ</th>
										<th style="    text-align: center;">Điện thoại</th>
										<th style="    text-align: center;">Email</th>
										<th style="    text-align: center;">Sky</th>
										<th style="    text-align: center;">FB</th>
										<th style="    text-align: center;">Cơ sở</th>
										<th style="    text-align: center;">Thời gian làm</th>
										
										<th style="width:127px;text-align:center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
							<tr>
										<td style="  text-align: center;  vertical-align: middle;">1026</td>
										<td>Trẻ hóa và chống thâm vùng mắt bằng parafin</td>
										<td>Trẻ hóa và chống thâm vùng mắt bằng rẻ hóa và chống thâm vùng mắt bằng rẻ hóa và chống thâm vùng mắt bằng rẻ hóa và chống thâm vùng mắt bằng parafinTrẻ hóa và chống thâm vùng mắt bằng parafin</td>
										<td style="    text-align: center;">0000-00-00</td>
										<td style="    text-align: center;">90 Phút</td>
										<td style="    text-align: center;">90 Phút</td>
										<td style="    text-align: center;">90 Phút</td>
										<td class="text-center"><a style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
										
									</tr>
										
								
							</tbody> 
								
						
						</table> 
					</div>
				</div>
			
				
				
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>