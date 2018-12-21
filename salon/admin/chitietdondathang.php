<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		case 2:
		case 4:	
		
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
	if(isset($_GET['dondat']))
	{
		$DB -> reset();
		$DB -> setTable('chitietdondat');
	    $DB->setWhere('iddonhangsanpham',$_GET['dondat']);
		$DB->select('idsanpham,soluong');
		while($cot = $DB->fetch_array($query))
		{
			$listIdSP[] = $cot['idsanpham'];
			$listIdSL[] = $cot['soluong'];
		}

		$DB -> reset();
		$DB -> setTable('sanpham');
	    $DB->setWhereIN('idsanpham',$listIdSP);
		$DB->select();
	
		 
		
		while($cot = $DB->fetch_array($query))
		{
			if($cot['giakhuyenmai']>0&&$cot['giakhuyenmai']<$cot['giaban'])
			{
				$gia=$cot['giakhuyenmai'];

			}else
			{
				$gia=$cot['giaban'];
			}
			$itemSanPham[]= array('tensanpham'=>$cot['tensanpham'],'gia'=>$gia);
			
		}

	
	    $i=1;
		$itemCTDD='';
	
			$tongtien = 0;
			
			foreach($itemSanPham as $key => $value)
			{
				
					$soluong = $listIdSL[$key];
				
				
				$tenSP = $value['tensanpham'];
				$gia = $value['gia'];
				$thanhtien = $soluong * $gia;
				$tongtien +=$thanhtien;
                $itemCTDD .='
			<tr>		
			<th>'.$i.'</th>
			<td>'.$tenSP.' </td>
			<td>'.$soluong.'</td>
			<td>'.number_format($gia, 0, ',',',').' VNĐ</td>
			<td>'.number_format($thanhtien, 0, ',',',').' VNĐ</td>
			<td class="text-center"><a style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
		</tr>
					';
					$i++;
			}
			
		
		
	}
	
	
	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="tables"> 
					<h2 class="title1">Chi tiết đơn đặt</h2>
					<div class="table-responsive bs-example widget-shadow">
					
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th>STT</th>
										<th>Tên sản phẩm </th>
										<th>Số lượng</th>
										<th>Đơn giá</th>
										<th>Thành tiền</th>
										<th class="text-center">Sửa | Xóa
									</tr>
							</thead> 
							<tbody> 
							
								
								
								<?php
								 echo $itemCTDD;
								?>
									
								
									
								
							</tbody> 
								<tfoot>
								<?php
									$DB -> reset();
									$DB -> setTable('nhanvien');
									$DB->setWhere('IdLoaiNhanVien',2);
									$DB->select();
									$itemGH='<select name="nhanvien" id="" class="form-control">';
									while($cot = $DB->fetch_array())
									{
										$itemGH .= '<option value="'.$cot['IdNhanVien'].'">'.$cot['HoVaTen'].'</option>';
									}
									$itemGH .= '</select>';
								?>
										<tr>
										<td colspan="3">
										 
										   
										</td>
										
										<td><b>Tổng tiền:</b></td>
										<td><?php echo number_format($tongtien, 0, ',',',');?> VNĐ</td>
										</tr>
											
								<tr>
								<td colspan="4" >
								  
								<?php
											  echo $itemGH;
											 ?>
								</td>
									<td class="text-center"><a href="#" class="btn btn-success"><i class="fa fa-truck"></i> Giao hàng</a></td>
									<td class="text-center"><a href="#" class="btn btn-danger"><i class="fa fa-print"></i> In hóa Đơn</a></td>
								</tr>
								</tfoot>
								
						
						</table> 
					</div>
				</div>
			
				
				
			</div>
		</div>
<?php
	include 'layout/footer.php';
?>