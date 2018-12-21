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
					location.replace("dondatdichvu.php");
				</script>';
			}
		}
		
	}

	$DB->reset();
	$DB->setTable('nhanvien');
	$DB->setWhere('idloainhanvien',3);
	$DB->select();
	$itemSelectNhanVien = '<select class="form-control"id="idnhanvien" onchange="loadKyNang()" name="idnhanvien" >';
	while($cot = $DB->fetch_array())
	{
		$itemSelectNhanVien .= '<option value="'.$cot['idnhanvien'].'">'.$cot['hoten'].'</option>';
	}
	$itemSelectNhanVien .='</select>';

	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Kỹ năng nhân viên</h2><hr>
            <?php
                echo $itemSelectNhanVien;
            ?>
            <div id="kqknnv">
					      
                               
                               
                              
							
						
			
				
				
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>