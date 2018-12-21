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
		
		
    if(isset($_GET['idloaithanhvien']))
    {
        $DB->reset();
        $DB->setTable('loaithanhvien');
        $DB->setWhere('idloaithanhvien',$_GET['idloaithanhvien']);
        $DB->select();
       
        if($DB->num_rows()==1)
        {
            $cot = $DB->fetch_array();
            $idloaithanhvien = $cot['idloaithanhvien'];
			$tenloaithanhvien = $cot['tenloaithanhvien'];
			$phantramuudai = $cot['phantramuudai'];
        }else
        {
            echo '
                <script>
                    location.replace("404.html");
                </script>
            ';
          
        }
    }
		
		if(isset($_POST['capnhatloaithanhvien']))
		{
			$DB->reset();
            $DB->setTable('loaithanhvien');
            $DB->setWhere('idloaithanhvien',$_POST['idloaithanhvien']);
            $DB->select();
            if($DB->num_rows()==1)
            {
                $arrloaiKhachHang['idloaithanhvien'] = $_POST['idloaithanhvien'];
                $arrloaiKhachHang['tenloaithanhvien'] = $_POST['tenloaithanhvien'];
				$arrloaiKhachHang['phantramuudai'] = $_POST['phantramuudai'];
                $DB->reset();
                $DB->setTable('loaithanhvien');
                $DB->setWhere('idloaithanhvien',$_GET['idloaithanhvien']);

                
                if($DB->update($arrloaiKhachHang))	
			    {
							echo '<script>
				  			alert("Cập nhật thành công thành công !");
				  			location.replace("danhsachloaikhachhang.php");
                        </script>';
                }
                else
                {
                    echo '<script>
				  			alert("Cập nhật thất bại!");
				  			
                        </script>';
                }
			}
        }
		
   
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm loại Khách Hàng</h2><hr>
			<form class="form-horizontal" method="POST">
							
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Tên loại khách hàng</label>
									<div class="col-sm-8">
                                       
										<input type="text"   name="phantramuudai" value="<?php echo $phantramuudai;?>" required class="form-control1"  placeholder="%">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Phần trăm ưu đãi</label>
									<div class="col-sm-8">
                                        <input type="hidden" name="idloaithanhvien" value="<?php echo $idloaithanhvien;?>">
										<input type="text"   name="tenloaithanhvien" value="<?php echo $tenloaithanhvien;?>" required class="form-control1"  placeholder="Tên loại khách hàng">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                               
							
								
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
									
									<button type="submit" name="capnhatloaithanhvien" class="btn btn-primary">Cập nhật</button>
									<a href="danhsachloaikhachhang.php" class="btn btn-success">Hủy</a>
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