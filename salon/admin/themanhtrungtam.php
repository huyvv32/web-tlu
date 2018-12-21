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
	if(isset($_POST['themanh']))
	{
		
		
		if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png')
		{
			move_uploaded_file($_FILES['anh']['tmp_name'],'../images/album/'.$_FILES['anh']['name']);
			
			
			$arrAnh['tenanh'] = $_FILES['anh']['name'];
			$arrAnh['ngaytao'] = date('Y-m-d');
			$DB->reset();
			$DB->setTable('album');
			
			if($DB->insert($arrAnh))
			{
				echo '<script>
				alert("Thêm thành công");;
				location.replace("anhtrungtam.php");
			</script>';
			}
		

		}
		else{
		
			echo '<script>
				alert("File Không hợp lệ");
			</script>';
		}
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm Ảnh trung tâm</h2><hr>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="#">
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">File</label>
									<div class="col-sm-8">
                                    <input type="file" name="anh" required id="exampleInputFile">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit" name="themanh" class="btn btn-primary">Thêm ảnh</button>
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