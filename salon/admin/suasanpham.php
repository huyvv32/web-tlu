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
    if(isset($_GET['idsanpham']))
	{   
        $DB->reset();
        $DB->setTable('sanpham');
        $DB->setWhere('idsanpham',$_GET['idsanpham']);
	    $DB->select();
        if($DB->num_rows()==1)
        {
            $cot = $DB->fetch_array();
            $idloaisanpham = $cot['idloaisanpham'];
            $tensanpham = $cot['tensanpham'];
            $mota = $cot['mota'];
            $noidung = $cot['noidung'];
            $giaban = $cot['giaban'];
            $hangsanxuat = $cot['hangsanxuat'];
            $khuyenmai = $cot['khuyenmai'];
            $baohanh = $cot['baohanh'];
            $diadiemban = $cot['diadiemban'];
            $ghichu = $cot['ghichu'];
            $giakhuyenmai =$cot['giakhuyenmai'];
        }
	    $DB->reset();
	    $DB->setTable('loaisanpham');
	    $DB->select();
	    if($DB->num_rows()>0)
	    {
		$itemSelectLSP = '<select class="form-control" name="idloaisanpham" id="">';
		while($cot= $DB->fetch_array())
		{
            if($idloaisanpham==$cot['idloaisanpham'])
            {
                $itemSelectLSP .= '<option selected value="'.$cot['idloaisanpham'].'">'.$cot['tenloaisanpham'].'</option>';
            }
            else
            {
                $itemSelectLSP .= '<option value="'.$cot['idloaisanpham'].'">'.$cot['tenloaisanpham'].'</option>';
            }
			
		}
		$itemSelectLSP .= '</select>';
        }
    }
	//------------------end ---------------------
	if(isset($_POST['capnhatsanpham']))
	{
		
		$arrSanPham['idloaisanpham'] = $_POST['idloaisanpham'];
		$arrSanPham['tensanpham'] = $_POST['tensanpham'];
		$arrSanPham['mota'] = $_POST['mota'];
		$arrSanPham['noidung'] = $_POST['noidung'];
		$arrSanPham['giaban'] = $_POST['giaban'];
		$arrSanPham['hangsanxuat'] = $_POST['hangsanxuat'];
		$arrSanPham['khuyenmai'] = $_POST['khuyenmai'];
		$arrSanPham['baohanh'] = $_POST['baohanh'];
		$arrSanPham['diadiemban'] = $_POST['diadiemban'];
        $arrSanPham['ghichu'] = $_POST['ghichu'];
        $arrSanPham['giakhuyenmai'] = $_POST['giakhuyenmai'] == '' ? 0 : $_POST['giakhuyenmai'];
        $idsanpham = $_POST['idsanpham'];

       
        if($arrSanPham['giakhuyenmai'] > $arrSanPham['giaban'])
        {
            echo '<script>alert("giá khuyến mại không thể lớn hơn giá bán");
                  
               </script>
            ';
        }
        else
        {
            if(!empty($_FILES['anh']['name']!=''))
            {
                if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png'||$_FILES['anh']['type'])
                {
                    move_uploaded_file($_FILES['anh']['tmp_name'],'../images/anhsp/'.$_FILES['anh']['name']);
                    
                    
                    $arrSanPham['anhsp'] = $_FILES['anh']['name'];
                    $DB->reset();
                    $DB->setTable('sanpham');
                    $DB->setWhere('idsanpham',$idsanpham);
                    $DB->select();
                    if($DB->num_rows()==1)
                    {
                        $DB->reset();
                        $DB->setTable('sanpham');
                        $DB->setWhere('idsanpham',$idsanpham);
                    
                        if($DB->update($arrSanPham))
                        {
                            echo '<script>
                            alert("Sửa thành công");;
                            location.replace("dssanpham.php");
                        </script>';
                        }
                    }
                
        
                }
                else{
                
                    echo '<script>
                        alert("File Không hợp lệ");
                        location:("suasanpham.php?idsanpham='.$_GET['idsanpham'].'");
                    </script>';
                }
               
            }else
            {
                
                $DB->reset();
                $DB->setTable('sanpham');
                $DB->setWhere('idsanpham',$idsanpham);
                $DB->select();
                if($DB->num_rows()==1)
                {
                    $DB->reset();
                    $DB->setTable('sanpham');
                    $DB->setWhere('idsanpham',$idsanpham);
                
                    if($DB->update($arrSanPham))
                    {
                        echo '<script>
                        alert("Sửa thành công");;
                        location.replace("dssanpham.php");
                    </script>';
                    }
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
				<label for="focusedinput" class="col-sm-2 control-label">Loại sản phẩm</label>
				<div class="col-sm-8">
					<?php
						echo $itemSelectLSP;
					?>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Tên sản phẩm</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $tensanpham;?>" name="tensanpham" required class="form-control1" id="focusedinput" placeholder="Thêm sản phẩm">
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
				<label for="txtarea1"  class="col-sm-2 control-label">Giá bán</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $giaban;?>" name="giaban" class="form-control">
				</div>
            </div>
            <div class="form-group">
				<label for="txtarea1"  class="col-sm-2 control-label">Giá khuyến mại</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $giakhuyenmai;?>" name="giakhuyenmai" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Hãng sản xuất</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $hangsanxuat;?>" name="hangsanxuat" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Khuyến mại</label>
				<div class="col-sm-8">
					<input type="text"  value="<?php echo $khuyenmai;?>" name="khuyenmai" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1"   class="col-sm-2 control-label">Bảo hành</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $baohanh;?>" name="baohanh" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Địa điểm bán</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $diadiemban;?>" name="diadiemban" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Ghi chú</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $ghichu;?>" name="ghichu" class="form-control">
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
                    <input type="hidden" name="idsanpham" value="<?php echo $_GET['idsanpham'];?>">
                    <button type="submit" name="capnhatsanpham" class="btn btn-primary">Cập nhật</button>
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