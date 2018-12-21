<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
		case 3:	
		
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
		$DB->reset();
		$DB->setTable('dondatdichvu');
		$DB->setWhere('iddondat',$_GET['iddondatdichvu']);
		
		$arrData['tennhanvien'] = $_POST['tennhanvien'];
		$arrData['idtrangthai']=2;
		if($DB->update($arrData))
		{
			echo '<script>
			   alert("Chọn nhân viên thành công");
			   location.replace("dondatdichvu.php");
			</script>';
		}
		
	}
	$DB->reset();
	$DB->setTable('dichvu');
	$DB->setWhere('iddichvu',$_GET['iddichvu']);
	$DB->select();

	$cot = $DB->fetch_array();
	$tendv = $cot['tendichvu'];
	// lay danh sach nhan vien 
	
	$DB->reset();
	$DB->setTable('kynangnhanvien');
	$DB->setWhere('iddichvu',$_GET['iddichvu']);
	$DB->select();
	if($DB->num_rows()>0)
	{
		while($cot = $DB->fetch_array())
		{
			$arrIdNHanVien[] = $cot['idnhanvien'];
		}
		
	$DB->reset();
	$DB->setTable('nhanvien');
	$DB->setWhereIN('idnhanvien',$arrIdNHanVien);
	$DB->select();
$itemTenNhanVien = '<select name="tennhanvien" class="form-control">';
while($cot = $DB->fetch_array())
{
	$itemTenNhanVien .=  '<option value="'.$cot['hoten'].'">'.$cot['hoten'].'</option>';
}
$itemTenNhanVien .= '</select>';
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
            <h2>Chọn nhân viên làm dịch vụ</h2><hr>
			<form class="form-horizontal" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dịch vụ</label>
									<div class="col-sm-8">
                                    <input disabled="" type="text" class="form-control1" id="disabledinput" Value="<?php echo $tendv;?>">
									</div>
									<div class="col-sm-2">
										
									</div>
                                </div>
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
									<input type="hidden" name ="iddondat" value="<?php echo $_GET['iddondatdichvu'];?>" class="btn btn-primary">
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