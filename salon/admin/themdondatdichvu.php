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
	if(isset($_POST['themdv']))
		{
			$iddichvu = $_POST['iddichvu'];
			$tenkhachhang = $_POST['tenkhachhang'];
			$sodienthoai = $_POST['sodienthoai'];
			$email = $_POST['email'];
			$ghichu = $_POST['ghichu'];
			$ngaylam = $_POST['ngaylam'];
			$giolam = $_POST['giolam'];
			$diachi = $_POST['diachi'];
			// lấy ngày tháng năm hiện tại
			$curentTime = strtotime(date('Y-m-d H:i:s'));
			// ghép ngày tháng năm , h nhập vào
			$time =$ngaylam.' '.$giolam;
			
			// kiểm tra id dịch cụ truyền vào có tồn tại trong bảng dịch vụ không
			$DB->reset();
			$DB->setTable('dichvu');
			$DB->setWhere('iddichvu',$iddichvu);
			$DB->select();
			if($DB->num_rows()==1)
			{
				$cot = $DB->fetch_array();
				$arrDDV['iddichvu'] = $iddichvu ;
				$arrDDV['thoiluong'] = $cot['thoiluong'];
				$arrDDV['tendichvu'] = $cot['tendichvu'];
				$arrDDV['tien'] = $cot['gia'];	
			}
			else
			{
				echo '<script>
						location.repalace("404.html");
					 </script>';
			}
			// so sánh thời gian nhập vào so vói thời gian hiện 
			if(strtotime($time)>=$curentTime)
			{
				$arrDDV['sodienthoai'] = $sodienthoai;
				$arrDDV['diachi'] = $diachi;
				$arrDDV['email'] = $email;
				$arrDDV['ngaytao'] = date('Y-m-d');
				$arrDDV['thoigianlam'] = $giolam;
				$arrDDV['ngaylam'] = $ngaylam;
				$arrDDV['tennhanvien'] = '';
				$arrDDV['ghichu'] = $ghichu;
				$arrDDV['thanhvien'] = $tenkhachhang;
				$arrDDV['idtrangthai'] = 1;

				$DB->reset();
				$DB->setTable('dondatdichvu');
				if($DB->insert($arrDDV))	
					{
						echo '<script>
				  					alert("Thêm thành công !");
				  					location.replace("dondatdichvu.php");
							  </script>';
						}
					}
				else{
					echo '<script>
				    			alert("Ngày hoặc giờ không hợp lệ");
								   </script>';
					// gán lại các giá tri cho text box
				   	$iddichvu = $_POST['iddichvu'];
					$tenkhachhang = $_POST['tenkhachhang'];
					$sodienthoai = $_POST['sodienthoai'];
					$email = $_POST['email'];
					$ghichu = $_POST['ghichu'];
					$diachi = $_POST['diachi'];
				}
		}
		// hiện thị dropdown dịch vụ
        $DB->reset();
        $DB->setTable('dichvu');
        $DB->select();
		if($DB->num_rows()>0)
        {
            $itemSelectDV = '<select name="iddichvu" class="form-control">';
            while($cot=$DB->fetch_array())
            {
				if($iddichvu==$cot['iddichvu'])
				{
					$itemSelectDV .= '<option selected value="'.$cot['iddichvu'].'">'.$cot['iddichvu'].'-'.$cot['tendichvu'].'-'.$cot['thoiluong'].'Phút - '.number_format($cot['gia'],0,",",",").' VNĐ'.'</option>';
				}
				else
				{
					$itemSelectDV .= '<option value="'.$cot['iddichvu'].'">'.$cot['iddichvu'].'-'.$cot['tendichvu'].'-'.$cot['thoiluong'].'Phút - '.number_format($cot['gia'],0,",",",").' VNĐ'.'</option>';

				}
               
            }
            $itemSelectDV .='</select>';
		}
?>

<div id="page-wrapper">
	<div class="main-page">
    	<h2>Đặt dịch vụ</h2><hr>
		<form class="form-horizontal" method="POST">
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Dịch vụ</label>
				<div class="col-sm-8">
                    <?php
                        echo $itemSelectDV;
                    ?>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="password" class="col-sm-2 control-label">Tên khách hàng</label>
				<div class="col-sm-8">
					<input type="text" value="<?php echo $tenkhachhang;?>"  name="tenkhachhang" required class="form-control1" id="password" placeholder="Tên khách hàng">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="password" class="col-sm-2 control-label">Số điện thoại</label>
				<div class="col-sm-8">
					<input type="text"  name="sodienthoai" value="<?php echo $sodienthoai;?>" required class="form-control1" id="password" placeholder="Số điện thoại">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="password" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-8">
					<input type="text"  name="email" value="<?php echo $email;?>" required class="form-control1" id="password" placeholder="Email">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Địa chỉ</label>
				<div class="col-sm-8">
					<input type="text"  name="diachi" value="<?php echo $diachi;?>" required class="form-control1" id="password" placeholder="Địa chỉ">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Ngày làm</label>
				<div class="col-sm-8">
					<input type="date"  name="ngaylam" required class="form-control1" id="password" placeholder="Email">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Giờ làm</label>
				<div class="col-sm-8">
					<input type="time"  name="giolam" required class="form-control1" id="password" placeholder="Email">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
            <div class="form-group">
				<label for="txtarea1" class="col-sm-2 control-label">Ghi chú</label>
				<div class="col-sm-8"><textarea value="<?php $ghichu;?>" name="ghichu" id="noidung" cols="50" rows="4" class="form-control"></textarea></div>
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
<?php
	include 'layout/footer.php';
?>