
<?php	
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';

    
	if(isset($_GET['idtrangthai']))
	{
		$DB->reset();
		$DB->setTable('dondatsanpham');
		$DB->setWhere('iddondat',$_GET['iddd']);
		
	
		$arrData['idtrangthai']=$_GET['idtrangthai'];
		if($DB->update($arrData))
		{
			echo '<script>
			   alert("'.$_GET['idtrangthai'].'");
			 
			</script>';
		}
	
    
		
	}

    
	$DB -> reset();
	$DB -> setTable('dondatsanpham');
	$DB->setWhere('idtrangthai',$_GET['idtrangthai']);
	$DB	-> setOrder('iddondat DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='dondatsanpham.php';
	$DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	
	$itemDDV = '';
	while($cot = $DB->fetch_array($query))
	{
		
		$tennhanvien = $cot['idtrangthai']==2 ? '':$cot['tennhanvien'];
		switch($cot['idtrangthai'])
		{
			case 1:
			{
				$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
				$itemTrangThai .= '<option value="1" selected>Tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" >Đang xử lý</option>';
				$itemTrangThai .= '<option value="3" disabled>Đang giao</option>';
				$itemTrangThai .= '<option value="4" >Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" >Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" disabled>Đã giao</option>';
				$itemTrangThai .='</select>';
				$xuly = '<a href="xulydondat.php?iddondatdichvu='.$cot['iddondat'].'&iddichvu='.$cot['iddichvu'].'" class="btn btn-primary">Xử lý</a>';
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				
				break;
			}
			
			case 2:
			{
				$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
				
				$itemTrangThai .= '<option value="2" selected>Đang xử lý</option>';
				$itemTrangThai .= '<option value="3" >Đang giao</option>';
				$itemTrangThai .= '<option value="4" >Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" selected>Công ty hủy</option>';
				
				$itemTrangThai .='</select>';
				$xuly = '<i class="fa fa-user"></i>';
				
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				break;
			}
						
				case 3:{
					$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
				
				
				$itemTrangThai .= '<option value="3" selected>Đang giao</option>';
				$itemTrangThai .= '<option value="4" >Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" >Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" >Đã giao</option>';
				$itemTrangThai .='</select>';
				}	
				break;
			
			case 4:
			{
				$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
				
				
				$itemTrangThai .= '<option value="4" selected>Khách hàng hủy</option>';
				
				$itemTrangThai .='</select>';
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatSanPham('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 5:
			{
				$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
				$itemTrangThai .= '<option value="5" selected>Công ty hủy</option>';
			
				$itemTrangThai .='</select>';
				$xuly = '<i class="fa fa-check"></i>';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatSanPham('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 6:
			{
				$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
				
				$itemTrangThai .= '<option value="6" selected>Đã giao</option>';
				$itemTrangThai .='</select>';
				$xuly = '<i class="fa fa-check"></i>';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatSanPham('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			
		}
		
		
		$itemDDV .='
		
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddondat'].'</td>
										<td>'.$cot['tendangnhap'].'</td>
										
										<td style="    text-align: center;">'.$tennhanvien.'</td>
                                       
										<td style="    text-align: center;">Xem thêm</td>
										<td style="    text-align: center;">'.$xuly.'</td>
										<td style="    text-align: center;">'.$itemTrangThai.'</td>
                                       
										<td style="    text-align: center;"><a href="chitietdondatdichvu.php?iddondat='.$cot['iddondat'].'"><i class="fa fa-eye"></i></a></td>
										
										<td class="text-center">'.$chinhsua.$xoa.'</td>
										
									</tr>
				';
	}
	
	
?>

						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">ID</th>
										<th style="    text-align: center;">Tên khách hàng</th>
                                       
                                        <th style="    text-align: center;"> Tên Nhân viên</th>
                                        
										<th style="    text-align: center;">Xem thêm</th>
										<th style="    text-align: center;">Xử lý</th>
                                        <th style="    text-align: center;">Trạng thái</th>
                                      
										<th style="    text-align: center;">Chi tiết</th>
										<th style="width:127px;text-align:center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
							<?php
							 echo $itemDDV;
							?>
							</tbody>
							
							
						
						</table> 
						