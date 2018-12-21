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
	//---------lấy danh sách loại tin tức----------------
	$DB->reset();
	$DB->setTable('loaitintuc');
	$DB->select();
	if($DB->num_rows()>0)
	{
		$itemSelectLTT = '<select class="form-control" name="idloaitintuc" id="">';
		while($cot= $DB->fetch_array())
		{
			$itemSelectLTT .= '<option value="'.$cot['idloaitintuc'].'">'.$cot['tenloaitintuc'].'</option>';
		}
		$itemSelectLTT .= '</select>';
	}
	//------------------end ---------------------
	if(isset($_POST['themtintuc']))
	{
		
		$arrTinTuc['idloaitintuc'] = $_POST['idloaitintuc'];
		$arrTinTuc['tieude'] = $_POST['tieude'];
		$arrTinTuc['mota'] = $_POST['mota'];
		$arrTinTuc['noidung'] = $_POST['noidung'];
		$arrTinTuc['ngaytao'] = date('Y-m-d');
		$arrTinTuc['nguoitao'] = $_SESSION['taikhoan']['tentaikhoan'];
		
		if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png')
		{
			move_uploaded_file($_FILES['anh']['tmp_name'],'../images/anhtintuc/'.$_FILES['anh']['name']);
			
			
			$arrTinTuc['anh'] = $_FILES['anh']['name'];

			$DB->reset();
			$DB->setTable('tintuc');
			
			if($DB->insert($arrTinTuc))
			{
				echo '<script>
				alert("Thêm thành công");;
				location.replace("danhsachtintuc.php");
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
        <h2>Thêm Tin Tức</h2><hr>
		<form class="form-horizontal" enctype="multipart/form-data" method="POST">
            <div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Loại tin tức</label>
				<div class="col-sm-8">
					<?php
						echo $itemSelectLTT;
					?>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Tiêu đề</label>
				<div class="col-sm-8">
					<input type="text" name="tieude" required class="form-control1" id="focusedinput" placeholder="Tiêu đề">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Mô tả</label>
				<div class="col-sm-8">
					<input type="text" name="mota" required class="form-control1" id="focusedinput" placeholder="Nhập mô tả">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Nội dung</label>
				<div class="col-sm-8">
					<textarea  name="noidung" id="noidung" cols="50" rows="4" class="form-control"></textarea>
				</div>
			</div>
            <div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">File</label>
					<div class="col-sm-8">
                        <input type="file" name="anh" id="exampleInputFile">
					</div>
					<div class="col-sm-2">
					</div>
			</div>
            <div class="form-group text-center">
				<label for="password" class="col-sm-2 control-label"></label>
				<div class="col-sm-8">
                    <button type="submit" name="themtintuc" class="btn btn-primary">Thêm</button>
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