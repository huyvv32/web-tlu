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
	// lấy danh sách dịch vụ từ CSDL và sắp sếp giảm dần
	$DB -> reset();
	$DB -> setTable('dichvu');
	$DB	-> setOrder('iddichvu DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	$itemDV = '';
	while($cot = $DB->fetch_array($query))
	{
		$itemDV .='<tr>
						<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddichvu'].'</td>
						<td>'.$cot['tendichvu'].'</td>
						<td style="text-align: center;">'.date_format(date_create($cot['ngaytao']),"d/m/Y").'</td>
						<td style="text-align: center;">'.$cot['thoiluong'].' Phút</td>
						<td style="text-align: center;">'.number_format($cot['gia']).'</td>
						<td class="text-center"><a href="suadichvu.php?iddv='.$cot['iddichvu'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button  onclick="xoaDichVu('.$cot['iddichvu'].','.$_GET['page'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
					</tr>';
	}
	
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Dịch vụ</h2>
			<form  class="form-horizontal">
				<div class="form-group">
					<label class="col-md-2 control-label"></label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon"><i class="fa fa-users"></i></span>
							<input type="text" id="faq_search_input" class="form-control1" placeholder="Tìm kiếm tên dịch vụ dịch vụ">
						</div>
					</div>
				</div>
			</form>
			<div class="table-responsive bs-example widget-shadow">
				<ul class="listDV">
					<li>
						<form action="exportDV.php">
							<button class="btn btn-primary"type="submit">Xuất file excel</button>
						</form>
					</li>
					<li>
						<h4><a href="themdichvu.php" class="btn btn-primary">Thêm dịch vụ</a></h4>
					</li>
					<li>
						<h4><a href="themkynangnhanvien.php" class="btn btn-primary">Thêm Kỹ năng nhân viên</a></h4>
					</li>
					<li>
						<h4><a href="xoakynangnhanvien.php" class="btn btn-primary">Xóa kỹ năng nhân viên</a></h4>
					</li>
				</ul>
				<div id="kqdv">
					<table class="table table-bordered"> 
						<thead> 
							<tr>
								<th style="text-align:center">STT</th>
								<th style="text-align: center;">Tên dịch vụ</th>
								<th style="width: 125px;text-align: center;">Ngày tạo</th>
								<th style="text-align: center;width: 131px;">Thời lượng</th>
								<th style="text-align: center;width: 131px;">Giá</th>
								<th style="width:127px;text-align:center">Sửa | Xóa</th>
							</tr>
						</thead> 
						<tbody> 
							   <?php
									echo $itemDV;
								?>
						</tbody> 
							<tfoot>
								<tr>
									<td style="text-align:center" colspan = "7">
										<?php
											echo $DB->html();
										?>
									</td>
								</tr>
							</tfoot>
					</table> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include 'layout/footer.php';
?>