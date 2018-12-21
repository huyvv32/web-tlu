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
	
	if(isset($_POST['capnhat']))
	{
		$iddondat = $_POST['iddondat'];
        $arrDDV['trangthai'] = $_POST['trangthai'];
		$arrDDV['thoigianlam'] = $_POST['giolam'];
		$arrDDV['ngaylam'] = $_POST['ngaylam'];
        $arrDDV['sodienthoai'] = $_POST['sodienthoai'];
        $arrDDV['ngaytao'] = date('Y-m-d');
        $arrDDV['ghichu'] = $_POST['ghichu'];
       

        $DB->reset();
            $DB->setTable('dondatdichvu');
            $DB->setWhere('iddondat',$iddondat);
			if($DB->update($arrDDV))
			{
				echo '<script>
				  alert("Sửa thành công !");
				  location.replace("dondatdichvu.php");
				</script>';
			}
	}
	if(isset($_GET['iddondatdv']))
	{
		$DB->reset();
		$DB->setTable('dondatdichvu');
		$DB->setWhere('iddondat',$_GET['iddondatdv']);
		$DB->select();
		if($DB->num_rows()==1)
		{
			if(isset($_GET['trangthai']))
			{
				$itemSelectTrangThai = '<select onchange="thayDoiXuLy(this)" class="form-control" name="trangthai">';
			   if($_GET['trangthai']==0)
			   {
				   $itemSelectTrangThai .='<option value="0">Chưa xử lý</option>';
			   }else
			   {
				  $itemSelectTrangThai .='<option value="0">Chưa xử lý</option><option selected value="1">Đã xử lý</option>';
			   }
			   $itemSelectTrangThai .='</select>';
			}
			$cot=$DB->fetch_array();
			$iddondat = $cot['iddondat'];
			$ghichu=$cot['ghichu'];
			$sodienthoai=$cot['sodienthoai'];
			$giolam = $cot['thoigianlam'];
			$ngaylam = $cot['ngaylam'];
		}
		else
		{
			echo "id dich vu khong ton tai";
		}

	}
   

	
		if(isset($_GET['iddv']))
		{

            
        
			$DB->reset();
            $DB->setTable('dichvu');
            $DB->setWhere('iddichvu',$_GET['iddv']);
            $DB->select();

            if($DB->num_rows()==1)
            {
               $cot=$DB->fetch_array();
            }

			
	
		}
	
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <a href="dondatdichvu.php" class="btn btn-primary">Quay lại</a><hr>
			<form class="form-horizontal" method="POST">
            <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Trạng thái</label>
									<div class="col-sm-8">
										<?php echo $itemSelectTrangThai;?>
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Ghi chú</label>
									<div class="col-sm-8">
										<input type="text" name="ghichu" value="<?php echo $ghichu;?>"  class="form-control" id="focusedinput" >
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Sô Điện Thoại</label>
									<div class="col-sm-8"><input  value="<?php echo $sodienthoai;?>" name="sodienthoai"  class="form-control"></div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Giờ làm</label>
									<div class="col-sm-8"><input type="time" required value="<?php echo $giolam;?>" id="giolam" name="giolam"  class="form-control"></div>
								</div>
								
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Ngày làm</label>
									<div class="col-sm-8"><input type="date" required value="<?php echo $ngaylam;?>" name="ngaylam" id="ngaylam" class="form-control"></div>
								</div>
								
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <input type="hidden" value="<?php echo $cot['iddondat'];?>" name="iddondat">
                                    <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
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