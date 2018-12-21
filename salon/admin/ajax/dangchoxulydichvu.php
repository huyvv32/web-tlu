
<?php	
	include '../../libraries/class.database.php';
	include '../../libraries/config.php';
	include '../../libraries/file_requick.php';

  

	$DB -> reset();
	$DB -> setTable('dondatdichvu');
	$DB	-> setOrder('iddondat DESC');
	$DB->setWhere('idtrangthai',$_GET['idtrangthai']);
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	 
	$itemDDV = '';
	while($cot = $DB->fetch_array($query))
	{
		$tennhanvien = $cot['idtrangthai']==2 ? '':$cot['tennhanvien'];
		$itemTrangThai='<select id="trangthaidv" onchange="ChangeTrangThai('.$cot['iddondat'].')">';
		switch($cot['idtrangthai'])
		{
			case 1:
			{
				$itemTrangThai .= '<option value="1" selected>Đã tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" disabled>Đã xử lý</option>';
				$itemTrangThai .= '<option value="3" disabled>Đang làm</option>';
				$itemTrangThai .= '<option value="4" >Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" >Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" disabled>Đã xong</option>';

				$xuly = '<a href="xulydondat.php?iddondatdichvu='.$cot['iddondat'].'&iddichvu='.$cot['iddichvu'].'" class="btn btn-primary">Xử lý</a>';
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
				break;
			}
			
			case 2:
			{
				$itemTrangThai .= '<option value="1" disabled>Đã tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" selected>Đã xử lý</option>';
				$itemTrangThai .= '<option value="3" disabled>Đang làm</option>';
				$itemTrangThai .= '<option value="4" >Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" >Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" disabled>Đã xong</option>';
				$xuly = '<i class="fa fa-user"></i>';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				break;
			}
						
					
			case 3:
			{
				$itemTrangThai .= '<option value="1" disabled>Đã tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" disabled>Đã xử lý</option>';
				$itemTrangThai .= '<option value="3" selected>Đang làm</option>';
				$itemTrangThai .= '<option value="4" disabled>Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" disabled>Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" >Đã xong</option>';
				$xuly = '<i class="fa fa-user"></i>';
				$xoa='';
				$chinhsua = '';
				break;
			}
			case 4:
			{
				$itemTrangThai .= '<option value="1" disabled>Đã tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" disable>Đã xử lý</option>';
				$itemTrangThai .= '<option value="3" disabled>Đang làm</option>';
				$itemTrangThai .= '<option value="4" selected>Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" disabled>Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" disabled>Đã xong</option>';
				
				
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 5:
			{
				$itemTrangThai .= '<option value="1" disabled>Đã tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" disable>Đã xử lý</option>';
				$itemTrangThai .= '<option value="3" disabled>Đang làm</option>';
				$itemTrangThai .= '<option value="4" disabled>Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" selected>Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" disabled>Đã xong</option>';
				
				
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 6:
			{
				$itemTrangThai .= '<option value="1" disabled>Đã tiếp nhận đơn hàng</option>';
				$itemTrangThai .= '<option value="2" disable>Đã xử lý</option>';
				$itemTrangThai .= '<option value="3" disabled>Đang làm</option>';
				$itemTrangThai .= '<option value="4" disabled>Khách hàng hủy</option>';
				$itemTrangThai .= '<option value="5" disabled>Công ty hủy</option>';
				$itemTrangThai .= '<option value="6" selected>Đã xong</option>';
				
				
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			
		}
		
		$itemTrangThai .='</select>';
		$itemDDV .='
		
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddondat'].'</td>
										<td>'.$cot['tendichvu'].'</td>
										<td>'.$cot['thanhvien'].'</td>
										<td style="    text-align: center;">'.$tennhanvien.'</td>
                                       
                                      
										<td style="    text-align: center;">'.$xuly.'</td>
										<td style="    text-align: center;">'.$itemTrangThai.'</td>
                                       
										<td style="    text-align: center;"><buton onclick="moreDV('.$cot['iddondat'].')" class="btn btn-primary" data-toggle="modal" data-target="#chitietdondatdv" ><i class="fa fa-eye"></i></button></td>
										
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
                                      
										<th style="    text-align: center;">Xem thêm</th>
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
								<td colspan="9">
									<?php 
										echo $DB->htmlajax('dangChoXuLyDV',$_GET['idtrangthai']);
									?>
								</td>
							</tr>
							</tfoot>
						
						</table> 