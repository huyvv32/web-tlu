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
	$DB -> setTable('googlemap');
	$DB	-> setOrder('idMap DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemMap = '';
	while($cot = $DB->fetch_array($query))
	{
		$itemMap .='
		<tr> 
									
									 <td>'.$cot['src'].'</td>
									
										<td><a style="margin-right: 17px" href="suabando.php?idMap='.$cot['idMap'].'" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></td>
									 </tr>
				';
	}
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Dịch vụ</h2>
			
					<div class="table-responsive bs-example widget-shadow">
						<h4><a href="themmoidichvu.php" class="btn btn-primary">Thêm dịch vụ</a></h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									
									<th>SRC Map</th> 
                                    <th></th> 
									
								</tr> 
							</thead> 
							<tbody> 
								<?php
									 
								echo $itemMap;
									 ?>
							</tbody> 
								
							
						</table> 
					</div>
				</div>
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>