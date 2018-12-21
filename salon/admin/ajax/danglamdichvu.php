<?php
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';
	// hiên thị danh sách dịch vụ có trạng thái là 2 ('Đã xử lý')
	$DB -> reset();
	$DB -> setTable('dondatdichvu');
	$DB->setWhere('idtrangthai',3);
	$DB	-> setOrder('iddondat DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='dondatdichvu.php';
	$DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	$tennhanvien='';
	$itemDDV = '';
	while($cot = $DB->fetch_array($query))
	{

		$tennhanvien=$cot['tennhanvien'];
		
		$itemTrangThai='<select id="trangthaidv" onchange="ChangeTrangThai('.$cot['iddondat'].')">';
		$itemTrangThai .= '<option value="1" disabled>Đã tiếp nhận đơn hàng</option>';
		$itemTrangThai .= '<option value="2" disabled>Đã xử lý</option>';
		$itemTrangThai .= '<option value="3" selected>Đang làm</option>';
		$itemTrangThai .= '<option value="4" disabled>Khách hàng hủy</option>';
		$itemTrangThai .= '<option value="5" disabled>Công ty hủy</option>';
		$itemTrangThai .= '<option value="6" >Đã xong</option>';
		$itemTrangThai .='</select>';
		// 3 nut xem , sửa xóa
		$xuly = '<i class="fa fa-user"></i>';
		$chinhsua = '';
		$xoa='';
		
		$itemDDV .='<tr>
						<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddondat'].'</td>
						<td>'.$cot['tendichvu'].'</td>
						<td>'.$cot['thanhvien'].'</td>
						<td style="text-align: center;">'.$tennhanvien.'</td>
                        <td style="text-align: center;">'.$xuly.'</td>
						<td style="text-align: center;">'.$itemTrangThai.'</td>
                        <td style="text-align: center;"><buton onclick="moreDV('.$cot['iddondat'].')" class="btn btn-primary" data-toggle="modal" data-target="#chitietdondatdv" ><i class="fa fa-eye"></i></button></td>
						<td class="text-center">'.$chinhsua.$xoa.'</td>
					</tr>
				';
		
	}
	
	
?>

					
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">ID</th>
										<th style="    text-align: center;">dịch vụ</th>
                                        <th style="    text-align: center;">Khách hàng</th>
                                        <th style="    text-align: center;">Nhân viên</th>
                                        
										
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
							<tfoot>
								<tr>
									<td style="text-align:center" colspan = "12">
									<?php 
										echo $DB->htmlajax('dangChoXuLyDV',3);
									?>
									</td>
								</tr>
							
							</tfoot>
						
						</table> 
						