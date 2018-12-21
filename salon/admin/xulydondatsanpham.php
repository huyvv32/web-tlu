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
	if(isset($_POST['xuly']))
	{
		echo '<pre>';
		echo print_r($_POST);
		echo '</pre>';
		$DB->reset();
		$DB->setTable('nhanvien');
		$DB->setWhere('idnhanvien',$_POST['idnhanvien']);
		$DB->select();
		if($DB->num_rows()==1)
		{
			$cot = $DB->fetch_array();
			$tennhanvien['tennhanvien'] = $cot['hoten'];
			$tennhanvien['idtrangthai'] =2;
			$DB->reset();
			$DB->setTable('dondatsanpham');
			$DB->setWhere('iddondat',$_POST['iddondat']);
			if($DB->update($tennhanvien))
			{
				echo '<script>
				alert("Chọn nhân viên giao hàng thành công");
				location.replace("dondatsanpham.php");
				</script>';
			}
		}
		
		
	}
	
	if(isset($_GET['iddondatsp']))
	{
		$DB->reset();
	$DB->setTable('dondatsanpham');
	$DB->setWhere('iddondat',$_GET['iddondatsp']);
	$DB->select();
	if($DB->num_rows()==1)
	{
		$DB->reset();
		$DB->setTable('nhanvien');
		$DB->setWhere('idloainhanvien',4);
		$DB->select();
			
		$itemTenNhanVien = '<select name="idnhanvien" class="form-control">';
		while($cot = $DB->fetch_array())
		{
			$itemTenNhanVien .=  '<option value="'.$cot['idnhanvien'].'">'.$cot['hoten'].'</option>';
		}
		$itemTenNhanVien .= '</select>';
		
	
	}
}else
{
	echo '<script>
	alert("Dịch vụ này chưa có nhân viên làm !");
	location.replace("dondatdichvu.php");
  </script>';
}

	


	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Chọn nhân viên giao hàng</h2><hr>
			<form class="form-horizontal" method="POST">
								
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nhân viên </label>
									<div class="col-sm-8">
										<?php
										 echo $itemTenNhanVien;
										?>
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                               
                               
                               
                              
							
						
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
									<input type="hidden" name ="iddondat" value="<?php echo $_GET['iddondatsp'];?>" class="btn btn-primary">
                                    <input type="submit" name ="xuly" value="Xử lý" class="btn btn-primary">
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