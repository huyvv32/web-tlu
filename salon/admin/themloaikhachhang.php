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
    if(isset($_POST['themloaikhachhang']))
    {
        foreach($_POST as $key=>$value)
        {
            $arrLKH[$key] = $value;
        }
        unset($arrLKH['themloaikhachhang']);

        $DB->reset();
        $DB->setTable('loaikhachhang');
        if($DB->insert($arrLKH))
        {
            echo '<script>
                alert("Thêm Thành Công!");
                location.replace("danhsachloaikhachhang.php");
            </script>';
        }
    }
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Thêm loại khách hàng</h2><hr>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
								
                               
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Tên loại khách hàng</label>
									<div class="col-sm-8">
										<input type="text"  name="tenloaikhachhang" required class="form-control1" id="password" placeholder="Họ và tên">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Phần trăm ưu đãi</label>
									<div class="col-sm-8">
										<input type="text" name="phantramuudai" required class="form-control1" id="password" placeholder="Phần trăm uu đãi">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                
                            
								
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit" name="themloaikhachhang" class="btn btn-primary">Thêm</button>
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