<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		
		
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
	$DB -> setTable('album');
	$DB	-> setOrder('id DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemAlbum = '';
	while($cot = $DB->fetch_array($query))
	{
		$itemAlbum .='
		<tr>
		<td style="  text-align: center;  vertical-align: middle;">'.$cot['id'].'</td>
		<td style="text-align:center"><img src="../images/album/'.$cot['tenanh'].'" width="200" height="200"/></td>
		<td>'.$cot['tenanh'].'</td>
		
		<td style="    text-align: center;">'.$cot['ngaytao'].'</td>
		<td class="text-center"><a href="suaanhtrungtam.php?idanhtrungtam='.$cot['id'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaAnhTrungTam('.$cot['id'].')"  class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
		
	</tr>
				';
	}
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Ảnh trung tâm</h2>
					<form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-users"></i>
												</span>
												<input type="text" class="form-control1" placeholder="Tìm kiếm ảnh">
												<span class="input-group-addon">
													<a href="#" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> </a>
												</span>
											</div>
										</div>
									</div>
								
								</form>
					<div class="table-responsive bs-example widget-shadow">
						<div id="kqatt">
						<h4><a href="themanhtrungtam.php" class="btn btn-primary">Thêm Ảnh</a></h4>
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">STT</th>
										<th style="    text-align: center;">Ảnh</th>
                                        <th style="    text-align: center;">Tên ảnh</th>
										
                                        
										<th style="    width: 125px;
    text-align: center;">Ngày tạo</th>
										
										<th style="width:127px;text-align:center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
							
									<?php
									   echo $itemAlbum;
									?>
							</tbody> 
								<tfoot>
								    <td style="text-align:center" colspan ="6">
										  <?php
										    echo $DB->html(); 
										  ?>
									</td>
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