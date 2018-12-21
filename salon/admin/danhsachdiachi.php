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
	$DB -> setTable('thongtin');
	$DB->select();
	$itemThongTin ='';
	while($cot = $DB->fetch_array())
	{
		$itemThongTin .='
		
		<tr>
										
										<td>'.$cot['ngaylamviec'].'</td>
										
										<td>'.$cot['thoigianlamviec'].'</td>
										<td>'.$cot['diachi'].'</td>
										<td>'.$cot['web'].'</td>
										<td>'.$cot['sodienthoai'].'</td>
										<td class="text-center"><button type="button" onclick="moreAddress('.$cot['idthongtin'].')" class="btn btn-info btn-lg" data-toggle="modal" data-target="#btnMoreAddress"><i class="fa fa-eye"></i></button></td>
                                      
										

										<td class="text-center"><a href="suadiachi.php?idthongtin='.$cot['idthongtin'].'" style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a></td>
										
									</tr>
				';
	}
		
		
	//<button onclick="xoaDiaChi('.$cot['idthongtin'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
				
					
					<div class="table-responsive bs-example widget-shadow">
					<!--<h4><a href="themdiachi.php" class="btn btn-primary">Thêm địa chỉ </a> </h4> -->
						<div id="kqdc">
						
						
							<table class="table table-bordered"> 
								<thead> 
										<tr>
											
											<th style="    text-align: center;">Ngày làm </th>
											<th style="    text-align: center;">Giờ làm</th>
											<th style="    text-align: center;">Địa chỉ</th>
											
											<th style="    text-align: center;">Web</th>
											<th style="    text-align: center;">SDT</th>
											<th style="    text-align: center;">Xem thêm</th>
											<th style="width:127px;text-align:center">Sửa | Xóa</th>
											
										</tr>
								</thead> 
								<tbody> 
								<?php
								echo $itemThongTin;
								?>
								</tbody> 
								
							
							</table> 
						</div>
						
					</div>
				</div>
			
				
				
			</div>
		
		</div>
	
  <!-- Modal -->
  <div class="modal fade" id="btnMoreAddress" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" id="contenModalDiaChi">
      
      
    </div>
      
    </div>
  </div>
  	<script>
	  function moreAddress(iddiachi)
	  {
	
				$.ajax({
                        method: "GET",
                        url: "./ajax/chitietdiachi.php",
                         data: { iddc: iddiachi},
                         success: function(result){
                            $("#contenModalDiaChi").html(result);
            }});
	  }
	  function xoaDiaChi(iddiachi)
	  {
		var r = confirm("Bạn có muốn xóa không!");
               if (r == true) {
	
				$.ajax({
                        method: "GET",
                        url: "./ajax/xoadiachi.php",
                         data: { iddc: iddiachi},
                         success: function(result){
                            $("#kqdc").html(result);
            }});
			   }
	  }
		  
	</script>
<?php
	include 'layout/footer.php';
?>