<?php
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';
	$DB->reset();
	$DB->setTable('trangthaisanpham');
	$DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	if($DB->num_rows()>0)
	{
	
		while($cot = $DB->fetch_array())
		{
			$arrTrangThai[$cot['idtrangthai']]= $cot['tentrangthai'];

		}
		
	}

	$DB -> reset();
	$DB -> setTable('dondatsanpham');
	$DB->setWhere('idtrangthai',3);
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
				$xuly = '<a href="xulydondat.php?iddondatdichvu='.$cot['iddondat'].'&iddichvu='.$cot['iddichvu'].'" class="btn btn-primary">Xử lý</a>';
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				
				break;
			}
			
			case 2:
			{
				$xuly = '<i class="fa fa-user"></i>';
			
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				break;
			}
						
					
			
			case 4:
			{
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 5:
			{
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 6:
			{
				$xuly = '<i class="fa fa-check"></i>';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			
		}
		
		
		$itemTrangThai='<select id="trangthaisp" onchange="ChangeTrangThaiSP('.$cot['iddondat'].')">';
		$itemTrangThai .= '<option value="3" selected>Đang giao</option>';
		$itemTrangThai .= '<option value="6">Đã giao</option>';
		$itemTrangThai .= '</select>';
				   
			
		 
		 
		
		$itemDDV .='
		
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddondat'].'</td>
										<td>'.$cot['tendangnhap'].'</td>
										
										<td style="    text-align: center;">'.$tennhanvien.'</td>
                                       
										<td style="    text-align: center;">Xem thêm</td>
										<td style="    text-align: center;">'.$xuly.'</td>
										<td style="    text-align: center;">'.$itemTrangThai.'</td>
                                       
										<td style="    text-align: center;"><a href="chitietdondatdichvu.php?iddondat='.$cot['iddondat'].'"><i class="fa fa-eye"></i></a></td>
										
										
										
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
										
										
									</tr>
							</thead> 
							<tbody> 
							<?php
							 echo $itemDDV;
							?>
							</tbody> 
							<tr style="text-align:center">
								<td colspan="7">
								<?php
									echo $DB->htmlajax('dangChoXuLySP',3);
								?>
								</td>
							</tr>
							
						
						</table> 
						