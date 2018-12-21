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
   	
		if(isset($_GET['idDaoTao']))
		{

            
        
			$DB->reset();
            $DB->setTable('daotao');
            $DB->setWhere('id',$_GET['idDaoTao']);
            $DB->select();

            if($DB->num_rows()==1)
            {
               $cot=$DB->fetch_array();
            }

			
	
        }
        if(isset($_POST['capnhat']))
		{
            $arrDaoTao['id'] = $_POST['iddaotao'];
            $arrDaoTao['src'] = $_POST['link'];

 
			$DB->reset();
            $DB->setTable('daotao');
            $DB->setWhere('id',$arrDaoTao['id']);
            $DB->select();

            if($DB->num_rows()==1)
            {
                $DB->reset();
                $DB->setTable('daotao');
                $DB->setWhere('id',$arrDaoTao['id']);
                if($DB->update($arrDaoTao))
                {
                    echo '<script>alert("cập nhật thành công .")
                    location.replace("daotao.php");
                    </script>';
                }
            }

			
	
		}
	
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            
			<form class="form-horizontal" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Link biểu mẫu</label>
									<div class="col-sm-8">
                                        
                                        <textarea name="link" class="form-control" rows="10" required="required"><?php echo $cot['src'];?></textarea>
                                        
										
                                        <input type="hidden" name="iddaotao" value="<?php echo $cot['id']?>">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <button type="submit" name="capnhat" class="btn btn-primary">Cập Nhật</button>
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