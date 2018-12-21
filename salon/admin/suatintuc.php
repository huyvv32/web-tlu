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
    //---------lấy danh sách loại sản phẩm----------------
    if(isset($_GET['idtintuc']))
	{   
        $DB->reset();
        $DB->setTable('tintuc');
        $DB->setWhere('idtintuc',$_GET['idtintuc']);
	    $DB->select();
        if($DB->num_rows()==1)
        {
            $cot = $DB->fetch_array();
            $idloaitintuc = $cot['idloaitintuc'];
            $tieude = $cot['tieude'];
            $mota = $cot['mota'];
            $noidung = $cot['noidung'];
            
        }
	    $DB->reset();
	    $DB->setTable('loaitintuc');
	    $DB->select();
	    if($DB->num_rows()>0)
	    {
		$itemSelectLTT = '<select class="form-control" name="idloaitintuc" id="">';
		while($cot= $DB->fetch_array())
		{
            if($idloaitintuc==$cot['idloaitintuc'])
            {
                $itemSelectLTT .= '<option selected value="'.$cot['idloaitintuc'].'">'.$cot['tenloaitintuc'].'</option>';
            }
            else
            {
                $itemSelectLTT .= '<option value="'.$cot['idloaitintuc'].'">'.$cot['tenloaitintuc'].'</option>';
            }
			
		}
		$itemSelectLTT .= '</select>';
        }
    }
	//------------------end ---------------------
	if(isset($_POST['capnhattintuc']))
	{
		
		$arrTinTuc['idloaitintuc'] = $_POST['idloaitintuc'];
		$arrTinTuc['tieude'] = $_POST['tieude'];
		$arrTinTuc['mota'] = $_POST['mota'];
		$arrTinTuc['noidung'] = $_POST['noidung'];
        $idtintuc = $_POST['idtintuc'];
        $arrTinTuc['ngaytao'] = date('Y-m-d');
		$arrTinTuc['nguoitao'] = $_SESSION['taikhoan']['tentaikhoan'];

            if(!empty($_FILES['anh']['name']!=''))
            {
                if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png'||$_FILES['anh']['type'])
                {
                    move_uploaded_file($_FILES['anh']['tmp_name'],'../images/anhtintuc/'.$_FILES['anh']['name']);
                    
                    
                    $arrTinTuc['anh'] = $_FILES['anh']['name'];
                    $DB->reset();
                    $DB->setTable('tintuc');
                    $DB->setWhere('idintuc',$idtintuc);
                    $DB->select();
                    if($DB->num_rows()==1)
                    {
                        $DB->reset();
                        $DB->setTable('tintuc');
                        $DB->setWhere('idtintuc',$idtintuc);
                    
                        if($DB->update($arrTinTuc))
                        {
                            echo '<script>
                            alert("Sửa thành công");;
                            location.replace("danhsachtintuc.php");
                        </script>';
                        }
                    }
                
        
                }
                else{
                
                    echo '<script>
                        alert("File Không hợp lệ");
                        location:("suatintuc.php?idtintuc='.$_GET['idtintuc'].'");
                    </script>';
                }
               
            }else
            {
                
                $DB->reset();
                $DB->setTable('tintuc');
                $DB->setWhere('idtintuc',$idtintuc);
                $DB->select();
                if($DB->num_rows()==1)
                {
                    $DB->reset();
                    $DB->setTable('tintuc');
                    $DB->setWhere('idtintuc',$idtintuc);
                
                    if($DB->update($arrTinTuc))
                    {
                        echo '<script>
                        alert("Cập nhật thành công");;
                        location.replace("danhsachtintuc.php");
                    </script>';
                    }
                }
                
            }
            
            
        
        
        }
      
      
?>
<div id="page-wrapper">
	<div class="main-page">
        <h2>Thêm sản phẩm</h2><hr>
		<form class="form-horizontal" enctype="multipart/form-data" method="POST">
            <div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Loại Tin Tức</label>
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
					<input type="text" value="<?php echo $tieude;?>" name="tieude" required class="form-control1" id="focusedinput" placeholder="Tiều đề">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Mô tả</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $mota;?>" name="mota" required class="form-control1" id="focusedinput" placeholder="Nhập mô tả">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Nội dung</label>
				<div class="col-sm-8">
					<textarea  name="noidung"  id="noidung" cols="50" rows="4" class="form-control"><?php echo $noidung;?></textarea>
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
                    <input type="hidden" name="idtintuc" value="<?php echo $_GET['idtintuc'];?>">
                    <button type="submit" name="capnhattintuc" class="btn btn-primary">Cập nhật</button>
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