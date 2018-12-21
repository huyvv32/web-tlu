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
		
		
    if(isset($_GET['idloaitintuc']))
    {
        $DB->reset();
        $DB->setTable('loaitintuc');
        $DB->setWhere('idloaitintuc',$_GET['idloaitintuc']);
        $DB->select();
       
        if($DB->num_rows()==1)
        {
            $cot = $DB->fetch_array();
            $idloaitintuc = $cot['idloaitintuc'];
            $tenloaitintuc = $cot['tenloaitintuc'];
        }else
        {
            echo '
                <script>
                    location.replace("404.html");
                </script>
            ';
          
        }
    }
		
		if(isset($_POST['capnhatloaitintuc']))
		{
			$DB->reset();
            $DB->setTable('loaitintuc');
            $DB->setWhere('idloaitintuc',$_POST['idloaitintuc']);
            $DB->select();
            if($DB->num_rows()==1)
            {
                $arrloaiTinTuc['idloaitintuc'] = $_POST['idloaitintuc'];
                $arrloaiTinTuc['tenloaitintuc'] = $_POST['tenloaitintuc'];

                $DB->reset();
                $DB->setTable('loaitintuc');
                $DB->setWhere('idloaitintuc',$_GET['idloaitintuc']);

                
                if($DB->update($arrloaiTinTuc))	
			    {
							echo '<script>
				  			alert("Cập nhật thành công thành công !");
				  			location.replace("loaitintuc.php");
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
            <h2>Thêm loại Tin Tức</h2><hr>
			<form class="form-horizontal" method="POST">
							
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Tên loại Tin Tức</label>
									<div class="col-sm-8">
                                        <input type="hidden" name="idloaitintuc" value="<?php echo $idloaitintuc;?>">
										<input type="text"   name="tenloaitintuc" value="<?php echo $tenloaitintuc;?>" required class="form-control1"  placeholder="Tên loại tin tức">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                               
							
								
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
									
									<button type="submit" name="capnhatloaitintuc" class="btn btn-primary">Cập nhật</button>
									<a href="danhsachloaitintuc.php" class="btn btn-success">Hủy</a>
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