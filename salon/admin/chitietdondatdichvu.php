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
	$DB->reset();
	$DB->setTable('trangthai');
	$DB->select();
	if(isset($_GET['iddondat']))
	{
		$DB -> reset();
		$DB -> setTable('dondatdichvu');
		$DB	-> setOrder('iddondat DESC');
		$DB->setWhere('iddondat',$_GET['iddondat']);
		$DB->select();
		if($DB->num_rows()>0)
		{
			$cot = $DB->fetch_array();
			$itemDDV .='
		
		<tr>
										
										
                                        <td style="    text-align: center;">'.$cot['ghichu'].'</td>
                                        <td style="    text-align: center;">'.$cot['tien'].'</td>
										
                                        <td style="    text-align: center;">'.$cot['sodienthoai'].'</td>
										<td style="    text-align: center;"><input disabled type="time" value="'.$cot['thoigianlam'].'"></td>
										<td style="    text-align: center;">'.$cot['ngaylam'].'</td>
                                       
                                        <td style="    text-align: center;">'.$cot['thoiluong'].' Phút</td>
										
										
									</tr>
				';
		}
		
	}
	
	
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					
					
					<div class="table-responsive bs-example widget-shadow">
						<div id="kqkh">
					
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										
										
                                        
                                        <th style="    text-align: center;">Ghi chú</th>
										
                                        <th style="    text-align: center;">Giá</th>

										<th style="    width: 125px;
    text-align: center;">SDT</th>
	<th style="    width: 125px;
    text-align: center;">Giờ làm</th>
										<th style="    text-align: center;
    width: 131px;">Ngày làm</th>
										<th style="width:127px;text-align:center">Thời lượng</th>
										
									</tr>
							</thead> 
							<tbody> 
							<?php
							 echo $itemDDV;
							?>
							</tbody> 
							
						
						</table> 
						</div>
						
					</div>
				</div>
			
				
				
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>