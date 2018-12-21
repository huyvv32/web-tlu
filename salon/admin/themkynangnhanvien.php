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
	if(isset($_POST['themkynangnhanvien']))
	{

		foreach($_POST as $key=>$value)
		{
			$arrKNNV[$key] = $value;
		}
		unset($arrKNNV['themkynangnhanvien']);

		$DB->reset();
		$DB->setTable('kynangnhanvien');
		$DB->setWhere('idnhanvien',$_POST['idnhanvien']);
		$DB->setWhere('iddichvu',$_POST['iddichvu']);
		$DB->select();
		if($DB->num_rows()==1)
		{
			echo '<script>
				alert("Nhân viên này đã có kỹ năng này !");
				
			</script>';
		}
		else
		{
			$DB->reset();
			$DB->setTable('kynangnhanvien');
			if($DB->insert($arrKNNV))
			{
				echo '<script>
					alert("Thêm thành công !");
					location.replace("danhsachdichvu.php");
				</script>';
			}
		}
		
	}

	$DB->reset();
	$DB->setTable('nhanvien');
	$DB->setWhere('idloainhanvien',3);
	$DB->select();
	$itemSelectNhanVien = '<select class="form-control" name="idnhanvien" >';
	while($cot = $DB->fetch_array())
	{
		$itemSelectNhanVien .= '<option value="'.$cot['idnhanvien'].'">'.$cot['hoten'].'</option>';
	}
	$itemSelectNhanVien .='</select>';

	$DB->reset();
	$DB->setTable('dichvu');
	$DB->select();
	$itemSelectDichVu = '<select class="form-control" name="iddichvu" >';
	while($cot = $DB->fetch_array())
	{
		$itemSelectDichVu .= '<option value="'.$cot['iddichvu'].'">'.$cot['tendichvu'].'</option>';
	}
	$itemSelectDichVu .='</select>';
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Kỹ năng nhân viên</h2><hr>
			<form class="form-horizontal" method ="POST" action="#">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nhân viên</label>
									<div class="col-sm-8">
										<?php
											echo $itemSelectNhanVien;
										?>
									</div>
									<div class="col-sm-2">
										
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dịch vụ </label>
									<div class="col-sm-8">
										<?php
											echo $itemSelectDichVu;
										?>
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                               
                               
                               
                              
							
						
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit"name="themkynangnhanvien"  class="btn btn-primary">Thêm</button>
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