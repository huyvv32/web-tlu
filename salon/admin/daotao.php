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
	$DB->reset();
	$DB->setTable('daotao');
	$DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	if($DB->num_rows()>0)
	{
		$itemDaoTao = '';
		while($cot = $DB->fetch_array())
		{
			$itemDaoTao .= '
            <tr>
           
            <td>'.$cot['src'].'</td>
            
			
        
       
			
		
			<td class="text-center"><a href="suadaotao.php?idDaoTao='.$cot['id'].'" style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>
			
		
        </tr>
        
			';
		}
	}
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Đào tạo</h2>
					
					<div class="table-responsive bs-example widget-shadow">
						
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										
                                        <th class="text-center">SRC</th>
										<th class="text-center">Sửa </th>
										
									</tr>
							</thead> 
							<tbody> 
								 <?php
								 	echo $itemDaoTao;
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