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
    if(isset($_GET['idnhanvien']))
    {
        $DB->reset();
        $DB->setTable('nhanvien');
        $DB->setWhere('idnhanvien',$_GET['idnhanvien']);
        $DB->select();
        if($DB->num_rows()==1)
        {
            $cot=$DB->fetch_array();
            $hoten = $cot['hoten'];
			$tuoi = $cot['tuoi'];
			$gioitinh = $cot['gioitinh'];
			$ngaysinh = $cot['ngaysinh'];
			$idloainhanvien = $cot['idloainhanvien'];
			$sodienthoai = $cot['sodienthoai'];
			$email = $cot['email'];
			$bangcap = $cot['bangcap'];
			$ngayvaolam = $cot['ngayvaolam'];
			$luong = $cot['luong'];
			$diachi = $cot['diachi'];
            $ngaynghilam= '';
            $idnhanvien=$cot['idnhanvien'];
        }
    }
	if(isset($_POST['capnhatnhanvien']))
	{
		

		if($_FILES['anh']['name']=='')
		{
			foreach($_POST as $key=>$value)
			{
				$arrNhanVien[$key]  = $value;
            }
            if($_POST['ngaynghilam']!='')
            {
                $arrNhanVien['idtrangthai'] = 2;
            }
			
			$arrNhanVien['anh'] = $_FILES['anh']['name'];
			unset($arrNhanVien['anh']);
			unset($arrNhanVien['capnhatnhanvien']);
			$DB->reset();
			$DB->setTable('nhanvien');
			$DB->setWhere('idnhanvien',$_POST['idnhanvien']);
			if($DB->update($arrNhanVien))
			{
				echo '<script>
				alert("Cập nhât thành công");
				location.replace("danhsachnhanvien.php");
			</script>';
			}
		}
		else
		{
			if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png')
			{
				move_uploaded_file($_FILES['anh']['tmp_name'],'../images/NhanVien/'.$_FILES['anh']['name']);
				
				foreach($_POST as $key=>$value)
				{
					$arrNhanVien[$key]  = $value;
				}
				if($_POST['ngaynghilam']!='')
				{
					$arrNhanVien['idtrangthai'] = 2;
				}
				
				$arrNhanVien['anh'] = $_FILES['anh']['name'];
				unset($arrNhanVien['capnhatnhanvien']);
				$DB->reset();
				$DB->setTable('nhanvien');
				$DB->setWhere('idnhanvien',$_POST['idnhanvien']);
				if($DB->update($arrNhanVien))
				{
					echo '<script>
					alert("Cập nhât thành công");
					location.replace("danhsachnhanvien.php");
				</script>';
				}
			}else
			{
				$hoten = $_POST['hoten'];
				$tuoi = $_POST['tuoi'];
				$gioitinh = $_POST['gioitinh'];
				$ngaysinh = $_POST['ngaysinh'];
				$idloainhanvien = $_POST['idloainhanvien'];
				$sodienthoai = $_POST['sodienthoai'];
				$email = $_POST['email'];
				$bangcap = $_POST['bangcap'];
				$ngayvaolam = $_POST['ngayvaolam'];
				$luong = $_POST['luong'];
				$diachi = $_POST['diachi'];
				$ngaynghilam= $_POST['ngaynghilam'];
				$idnhanvien=$_POST['idnhanvien'];
			
			
			}
			
		}

		
		


		
	}
	$DB->reset();
	$DB->setTable('loainhanvien');
	$DB->select();
	if($DB->num_rows()>0)
	{
		$itemSelectLNV='<select class="form-control" name="idloainhanvien">';
		if(isset($idloainhanvien))
		{
				while($cot=$DB->fetch_array())
			{
				if($cot['idloainhanvien']==1)
				{
					continue;
				}
				if($cot['idloainhanvien']==$idloainhanvien)
				{
					$itemSelectLNV .= '<option selected value="'.$cot['idloainhanvien'].'" >'.$cot['tenloainhanvien'].'</option>';
				}else
				{
					$itemSelectLNV .= '<option value="'.$cot['idloainhanvien'].'" >'.$cot['tenloainhanvien'].'</option>';
				}
				
			}
			$itemSelectLNV .='</select>';
		}
		else
		{
			while($cot=$DB->fetch_array())
			{
				if($cot['idloainhanvien']==1)
				{
					continue;
				}
				
					$itemSelectLNV .= '<option value="'.$cot['idloainhanvien'].'" >'.$cot['tenloainhanvien'].'</option>';
				
				
			}
			$itemSelectLNV .='</select>';
		}
		
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Sửa nhân viên</h2><hr>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
								
                               
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Họ và tên</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $hoten;?>" name="hoten" required class="form-control1" id="password" placeholder="Họ và tên">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="password"  class="col-sm-2 control-label">Tuổi</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $tuoi;?>" name="tuoi" required class="form-control1" id="password" placeholder="Tuổi">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Giới tính</label>
									<div class="col-sm-8">
									<?php
										if(isset($tuoi))
											{
												if($tuoi==0)
												{
													echo '<div class="radio-inline"><label><input name="gioitinh" type="radio" value="1"> Nam</label></div>';
													echo '<div class="radio-inline"><label><input name="gioitinh" type="radio" value="0" checked> Nữ</label></div>';
												}
												else
												{
													echo '<div class="radio-inline"><label><input name="gioitinh" checked type="radio" value="1"> Nam</label></div>';
													echo '<div class="radio-inline"><label><input name="gioitinh" type="radio" value="0"> Nữ</label></div>';
												}
											}
											else
											{
													echo '<div class="radio-inline"><label><input name="gioitinh" type="radio" value="1"> Nam</label></div>';
													echo '<div class="radio-inline"><label><input name="gioitinh" type="radio" value="0" checked> Nữ</label></div>';
											}
										
										?>
									</div>
								</div>
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Ngày sinh</label>
									<div class="col-sm-8">
										<input type="date" name="ngaysinh" value="<?php echo $ngaysinh;?>" required class="form-control1" id="password" placeholder="Tuổi">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Địa chỉ</label>
									<div class="col-sm-8"><input value="<?php echo $diachi;?>" name="diachi" id="txtarea1" class="form-control"/></div>
								</div>
                                <div class="form-group">
									<label for="password"  class="col-sm-2 control-label">Số điện thoại</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $sodienthoai;?>" name="sodienthoai" required class="form-control1" id="password" placeholder="Số điện thoại">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" name="email" value="<?php echo $email;?>"  required class="form-control1" id="password" placeholder="Email">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Bằng cấp</label>
									<div class="col-sm-8">
										<input type="text" name="bangcap" value="<?php echo $bangcap;?>" required class="form-control1" id="password" placeholder="Bằng cấp">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Ngày vào làm</label>
									<div class="col-sm-8">
										<input type="date" name="ngayvaolam" value="<?php echo $ngayvaolam;?>" required class="form-control1" id="password" placeholder="Tuổi">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
                                <div class="form-group">
									<label for="password" class="col-sm-2 control-label">Ngày nghi làm</label>
									<div class="col-sm-8">
										<input type="date"  value="<?php echo $ngaynghilam;?>" name="ngaynghilam"  class="form-control1" id="password" placeholder="Tuổi">
									</div>
									<div class="col-sm-2">
										

									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Công việc</label>
									<div class="col-sm-8">
										<?php
											echo $itemSelectLNV;
										?>
									</div>
									<div class="col-sm-2">
										

									</div>
									
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Lương</label>
									<div class="col-sm-8">
										<input type="number" name="luong" value="<?php echo $luong;?>" required class="form-control1" id="password" placeholder="Lương">
									</div>
									<div class="col-sm-2">
										
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Ảnh</label>
									<div class="col-sm-8">
										<input type="file" name="anh" accept=".jpg, .jpeg, .png"  class="form-control1" id="password" placeholder="Tuổi">
									</div>
									<div class="col-sm-2">
							
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Ghi chú</label>
									<div class="col-sm-8"><textarea name="ghichu" id="txtarea1" cols="50" rows="4" class="form-control"></textarea></div>
								</div>
                                <div class="form-group text-center">
									<label for="password" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
                                    <input type="hidden" name="idnhanvien" value="<?php echo $idnhanvien;?>">
                                    <button type="submit" name="capnhatnhanvien" class="btn btn-primary">Cập nhật</button>
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