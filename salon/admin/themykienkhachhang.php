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
    if(isset($_POST['themykien']))
	{
        $idykienkhachang = $_POST['idykienkhachhang'];
        $arrAnh['tenkhachhang'] = $_POST['tenkhachhang'];
        $arrAnh['ykien'] = $_POST['ykien'];
        $arrAnh['diachi'] = $_POST['diachi'];
        $arrAnh['ngaytao'] = date('Y-m-d');
            
                if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png')
                {
                    move_uploaded_file($_FILES['anh']['tmp_name'],'../images/khachhang/'.$_FILES['anh']['name']);
                    $arrAnh['anh'] = $_FILES['anh']['name'];
                    $DB->reset();
                    $DB->setTable('ykienkhachhang');
                    
                    if($DB->insert($arrAnh))
                    {
                        echo '<script>
                        alert("Cập nhật thành công");
                        location.replace("ykienkhachhang.php");
                    </script>';
                    }
                    
        
                }
                else
                {
                    $tenkhachhang = $_POST['tenkhachhang'];
                    $diachi = $_POST['diachi'];
                    $ykien = $_POST['ykien'];
                    echo '<script>
                        alert("File Không hợp lệ");
                    </script>';
                }
                
                
           
        
    }
    
    
     
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
        
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="#">
								
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label">Tên khách hàng</label>
									<div class="col-sm-8">
                                    <input class="form-control" type="text" name="tenkhachhang" value="<?php echo $tenkhachhang;?>"  >
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label">Địa chỉ</label>
									<div class="col-sm-8">
                                    <input class="form-control" type="text" name="diachi" value="<?php echo $diachi;?>"  >
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label">Ý Kiến</label>
									<div class="col-sm-8">
                                    
                                    <textarea name="ykien"  class="form-control" rows="5" ><?php echo $ykien;?></textarea>
                                    
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">File</label>
									<div class="col-sm-8">
                                    <input type="file"  name="anh" value="<?php echo $tenanh;?>" required id="exampleInputFile">
									<input type="hidden" name="idykienkhachhang" value="<?php echo $_GET['idykienkhachhang'];?>"  >
                                    </div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit" name="themykien" class="btn btn-primary">Thêm</button>
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