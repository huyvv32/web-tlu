<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
			
		case 6:
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
	$DB -> reset();
	$DB -> setTable('tintuc');
	$DB	-> setOrder('idtintuc DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemTinTuc = '';
	while($cot = $DB->fetch_array($query))
	{
		$itemTinTuc .='
		<tr>
		<td style="  text-align: center;  vertical-align: middle;">'.$cot['idtintuc'].'</td>
		<td>'.$cot['tieude'].'</td>
		<td>'.$cot['mota'].'</td>
		<td style="    vertical-align: middle;
text-align: center;">'.$cot['nguoitao'].'</td>
		<td style="    vertical-align: middle;
text-align: center;">'.$cot['ngaytao'].'</td>
		
		<td style="    text-align: center;"><img src="../images/anhtintuc/'.$cot['anh'].'" alt="" width="150" height="150"></td>
		
		<td class="text-center"><a href="suatintuc.php?idtintuc='.$cot['idtintuc'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaTinTuc('.$cot['idtintuc'].')"  class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
		
	</tr>
				';
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Tin tức</h2>
					<form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-users"></i>
												</span>
												<input type="text" class="form-control1" placeholder="Tìm kiếm tin tức">
												<span class="input-group-addon">
													<a href="#" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> </a>
												</span>
											</div>
										</div>
									</div>
								
								</form>
					<div class="table-responsive bs-example widget-shadow">
						
						<h4><a href="themtintuc.php" class="btn btn-primary">Thêm tin tức</a> | <a href="themloaitintuc.php" class="btn btn-primary">Thêm Loại tin tức</a> </h4>
						<div id="kqtt">
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="    vertical-align: middle;
    text-align: center;">STT</th>
										<th style="    vertical-align: middle;
    text-align: center;">Tiêu đề</th>
										<th style="    vertical-align: middle;
    text-align: center;">Mô tả</th>
										<th>Người tạo</th>
										<th  style="  width: 110px;
    text-align: center;
    vertical-align: middle;">Ngày tạo</th>
										
										<th style="    vertical-align: middle;
    text-align: center;">Ảnh</th>
										
										<th style="width: 128px;text-align:center;vertical-align: middle;" >Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
							<?php
								echo $itemTinTuc;
							?>
										
								
							</tbody> 
								<tfoot>
								<tr>
									<td style="text-align:center" colspan="8"><?php	echo $DB->html(); ?></td>
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