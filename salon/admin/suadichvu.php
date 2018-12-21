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
        $iddichvu = $_POST['iddichvu'];
        $arrDV['tendichvu'] = $_POST['tendichvu'];
        $arrDV['noidung'] = $_POST['noidung'];
        $arrDV['ngaytao'] = date('Y-m-d');
        $arrDV['thoiluong'] = $_POST['thoiluong'];
		$arrDV['gia'] = $_POST['gia'];
		
        $DB->reset();
        $DB->setTable('dichvu');
        $DB->setWhere('iddichvu',$iddichvu);
		if($DB->update($arrDV))
		{
			echo '<script>
						alert("Cập nhật thành công !");
				 	 	location.replace("danhsachdichvu.php");
				 </script>';
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


<div id="page-wrapper">
	<div class="main-page">
        <a href="danhsachdichvu.php" class="btn btn-primary">Quay lại</a><hr>
		<form class="form-horizontal" method="POST">
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Tên dịch vụ</label>
				<div class="col-sm-8">
					<input type="text" name="tendichvu" value="<?php echo $cot['tendichvu'];?>" required class="form-control" id="focusedinput" placeholder="Tên dịch vụ">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
				<div class="col-sm-8">
					<textarea name="mota" class="form-control"  cols="50" rows="3"><?php echo $cot['mota'];?></textarea>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Nội dung</label>
				<div class="col-sm-8">
					<textarea name="noidung"><?php echo $cot['noidung'];?></textarea>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Thời lượng</label>
				<div class="col-sm-8">
					<input type="number" value="<?php echo $cot['thoiluong'];?>"  required name="thoiluong" class="form-control" id="password" placeholder="Nhập vào số thời gian">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="password" class="col-sm-2 control-label">Giá</label>
				<div class="col-sm-8">
					<input type="number" value="<?php echo $cot['gia'];?>" name="gia" required class="form-control1" id="password" placeholder="Giá">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group text-center">
				<label for="password" class="col-sm-2 control-label"></label>
				<div class="col-sm-8">
                	<input type="hidden" value="<?php echo $cot['iddichvu'];?>" name="iddichvu">
                    <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	CKEDITOR.replace("noidung",{
		filebrowserBrowseUrl : 'http://localhost/salon/admin/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : 'http://localhost/salon/admin/ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl : 'http://localhost/salon/admin/ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl : 'http://localhost/salon/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : 'http://localhost/salon/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : 'http://localhost/salon/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	                 			});
</script>
<?php
	include 'layout/footer.php';
?>