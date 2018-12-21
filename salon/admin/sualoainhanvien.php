<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
	
		
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
    if(isset($_POST['capnhatloainhanvien']))
    {
            $idloainhanvien = $_POST['idloainhanvien'];
            $arrLNV['tenloainhanvien'] = $_POST['tenloainhanvien'];
			$DB->reset();
            $DB->setTable('loainhanvien');
			$DB ->setWhere('idloainhanvien',$idloainhanvien);
			
			$DB->select();
			
			if($DB->num_rows()==1)
			{
				if($DB->update($arrLNV))
			{
				echo '<script>
				alert("Cập nhật thành công");;
				location.replace("danhsachloainhanvien.php");
			</script>';
			}
			}
			
			
			
    }
    if(isset($_GET['idloainhanvien']))
		{
					
					$DB->reset();
                    $DB->setTable('loainhanvien');
                    $DB->setWhere('idloainhanvien',$_GET['idloainhanvien']);
                    $DB->select();
                    if($DB->num_rows()==1)
                    {
                        $cot = $DB->fetch_array();
                        $tenloainhanvien = $cot['tenloainhanvien'];
                        $idloainhanvien = $cot['idloainhanvien'];
                    }else
					{
						echo '<script>
						alert("Loi khong tin thay file");;
						location.replace("danhsachloainhanvien.php");
					</script>';
					}
        }
    
		
				

			

			
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm loại nhân viên</h2><hr>
			<form class="form-horizontal" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên loại nhân viên</label>
									<div class="col-sm-8">
                                    <input type="text" value="<?php echo $tenloainhanvien;?>"  name="tenloainhanvien" required class="form-control1" id="password" placeholder="Tên loại nhân viên">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                               
                               
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
									<input type="hidden"  name="idloainhanvien"value="<?php echo $idloainhanvien;?>">
                                    <button type="submit" name="capnhatloainhanvien" class="btn btn-primary">Cập nhật</button>
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