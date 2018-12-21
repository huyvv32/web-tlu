<?php
   

	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';
	$DB->reset();
	$DB->setTable('trangthai');
	$DB->select();
	if($DB->num_rows()>0)
	{
	
		while($cot = $DB->fetch_array())
		{
			$arrTrangThai[$cot['idtrangthai']]= $cot['tentrangthai'];

		}
		
	}

	$DB -> reset();
	$DB -> setTable('dondatdichvu');
	$DB->setWhereLike('thanhvien',$_GET['tenkh']);
	$DB	-> setOrder('iddondat DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='dondatdichvu.php';
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
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
				break;
			}
			
			case 2:
			{
				$xuly = '<i class="fa fa-user"></i>';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
				$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
				break;
			}
						
					
			case 3:
			case 4:
			{
				$xuly = '';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			case 5:
			{
				$xuly = '<i class="fa fa-check"></i>';
				$chinhsua = '';
				$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			
				break;
			}
			
		}
		
		$itemTrangThai='<select id="trangthaidv" onchange="ChangeTrangThai('.$cot['iddondat'].')">';
		
		foreach($arrTrangThai as $key=> $value)
		{
		 if($cot['idtrangthai']==1)
		 {
			 if($key==1)
			 {
				$itemTrangThai .= '<option value="'.$key.'" selected>'.$value.'</option>';
			 }else
				if($key==2||$key==5)
				{
				   $itemTrangThai .= '<option value="'.$key.'" disabled>'.$value.'</option>';
				  
				}
			 
			else
			{
				$itemTrangThai .= '<option value="'.$key.'" >'.$value.'</option>';


			}
			
		 }
		 else
		 {
			if($cot['idtrangthai']==3 || $cot['idtrangthai']==4 )
			{
				if($key==$cot['idtrangthai'])
				{
				   $itemTrangThai .= '<option value="'.$key.'" selected>'.$value.'</option>';
				   break;
				}
			   
			}else
			{
			   if($cot['idtrangthai']<=$key)
			   {
				 if($cot['idtrangthai']==$key)
				 {
					 $itemTrangThai .= '<option value="'.$key.'" selected>'.$value.'</option>';
				 }
				 else
				 {
				  $itemTrangThai .= '<option value="'.$key.'">'.$value.'</option>';
				 }
			   }
			   else
			   {
				   continue;
			   }
		 }
		
		 
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
							
						
						</table> 
						