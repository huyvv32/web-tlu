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
	$DB -> reset();
	$DB -> setTable('loainhanvien');

	$DB->select();
	 
	$itemLNV = '';
	while($cot = $DB->fetch_array($query))
	{
		
				$itemLNV .='
				<tr> 
										
											 <td>'.$cot['tenloainhanvien'].'</td>
											
												<td class="text-center"><a style="margin-right: 17px" href="sualoainhanvien.php?idloainhanvien='.$cot['idloainhanvien'].'" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaLoaiNhanVien('.$cot['idloainhanvien'].')" class="btn btn-primary"><i class="fa fa-trash-o"></i></a></td>
											 </tr>
						';
			
		
		
	}
	
?>
<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
				
			
					<div class="table-responsive bs-example widget-shadow">
						<h4><a href="themloainhanvien.php" class="btn btn-primary">Thêm Loại Nhân Viên</a></h4>
						<div id="kqlnv">
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								
									<th>Loại Nhân viên</th> 
                                    <th class="text-center">Sửa | Xóa</th> 
								</tr> 
							</thead> 
							<tbody> 
								<?php
								      echo $itemLNV;
									 ?>
							</tbody> 
								
						</table> 
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<script>
			 function xoaLoaiNhanVien(idloainhanvien)
            {
                 
				var r = confirm("Bạn có muốn xóa không! Tất cả nhân viên sẽ bị xóa");
               if (r == true) {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoaloainhanvien.php",
                         data: { idlnv: idloainhanvien},
                         success: function(result){
                            $("#kqlnv").html(result);
            }});
       
    }
	            
            }
		</script>
<?php
	include 'layout/footer.php';
?>