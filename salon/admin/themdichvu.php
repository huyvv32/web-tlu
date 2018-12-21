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
	//lấy danh sách loại dịch vụ
	$DB->reset();
    $DB->setTable("loaidichvu");
    $DB->select();
    if($DB->num_rows()>0)
    {
        $itemLoaiDichVu = '';
        while($cot= $DB->fetch_array())
        {
            $itemLoaiDichVu .= '<option value='.$cot['idloaidichvu'].'>'.$cot['tenloaidichvu'].'</option>';
        }
    }
	if(isset($_POST['themdv']))
		{
			$arrDV['idloaidichvu'] = $_POST['idloaidichvu'];
			$arrDV['tendichvu'] = $_POST['tendichvu'];
			$arrDV['mota'] = $_POST['mota'];
			$arrDV['noidung'] = $_POST['noidung'];
			$arrDV['ngaytao'] = date('Y-m-d');
			$arrDV['thoiluong'] = $_POST['thoiluong'];
			$arrDV['gia'] = $_POST['gia'];
			
			
		if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png')
		{
			move_uploaded_file($_FILES['anh']['tmp_name'],'../images/anhdichvu/'.$_FILES['anh']['name']);
			$arrDV['anh'] = $_FILES['anh']['name'];
			$DB->reset();
			$DB->setTable('dichvu');
			if($DB->insert($arrDV))
			{
				echo '<script>
				  alert("Thêm thành công !");
				  location.replace("danhsachdichvu.php");
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

<div id="page-wrapper">
	<div class="main-page">
        <a class="btn btn-primary" href="danhsachdichvu.php">Quay lại</a><hr>
		<form class="form-horizontal" method="POST" enctype="multipart/form-data" >
		<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Loại dịch vụ</label>
				<div class="col-sm-8">
					<select name="idloaidichvu" class="form-control">
						<?php
							echo $itemLoaiDichVu;
						?>
					</select>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Tên dịch vụ</label>
				<div class="col-sm-8">
					<input type="text" name="tendichvu" required class="form-control" id="focusedinput" placeholder="Tên dịch vụ">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
				<div class="col-sm-8">
					<textarea name="mota"  cols="5" rows="3" class="form-control"></textarea>
				</div>
			</div>
            <div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Nội dung</label>
				<div class="col-sm-8">
					<textarea name="noidung" id="noidung" cols="50" rows="4" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Thời lượng</label>
				<div class="col-sm-8">
					<input type="number" required name="thoiluong" class="form-control" id="password" placeholder="Nhập vào số phút">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="password" class="col-sm-2 control-label">Giá</label>
				<div class="col-sm-8">
					<input type="number"  name="gia" required class="form-control1" id="password" placeholder="VNĐ">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
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
            		<button type="submit" name="themdv" class="btn btn-primary">Thêm</button>
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