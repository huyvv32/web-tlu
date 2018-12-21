
<?php
include '../../libraries/config.php';
include '../../libraries/class.database.php';
include '../../libraries/file_requick.php';
	
  if(isset($_GET['iddc']))
  {
      
    $DB->reset();
    $DB->setTable('thongtin');
    $DB->setWhere('idthongtin',$_GET['iddc']);
    $DB->select();
    if($DB->num_rows()==1)
    {
 
    $DB->delete();

    }

     
	$DB -> reset();
	$DB -> setTable('thongtin');
	$DB->select();
	$itemThongTin ='';
	while($cot = $DB->fetch_array())
	{
		$itemThongTin .='
		
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['idthongtin'].'</td>
										<td>'.$cot['ngaylamviec'].'</td>
										
										<td>'.$cot['thoigianlamviec'].'</td>
										<td>'.$cot['diachi'].'</td>
										<td>'.$cot['sodienthoai'].'</td>
										<td><button type="button" onclick="moreAddress('.$cot['idthongtin'].')" class="btn btn-info btn-lg" data-toggle="modal" data-target="#btnMoreAddress"><i class="fa fa-eye"></i></button></td>
                                      
										

										<td class="text-center"><a href="suadondatdichvu.php?iddondatdv=149&amp;trangthai=" style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaDiaChi('.$cot['idthongtin'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
										
									</tr>
				';
    } 
 
    
   
  }
 
?>

						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">STT</th>
										<th style="    text-align: center;">Ngày làm </th>
                                        <th style="    text-align: center;">Giờ làm</th>
                                        <th style="    text-align: center;">Địa chỉ</th>
                                        
										
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

