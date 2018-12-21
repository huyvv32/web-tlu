<?php
include '../../libraries/config.php';
include '../../libraries/class.database.php';
include '../../libraries/file_requick.php';
	
  if(isset($_GET['idlnv']))
  {
      
    $DB->reset();
    $DB->setTable('nhanvien');
    $DB->setWhere('idloainhanvien',$_GET['idlnv']);
    
 
    $DB->delete();


    
    
      
    $DB->reset();
    $DB->setTable('loainhanvien');
    $DB->setWhere('idloainhanvien',$_GET['idlnv']);
    $DB->select();
    if($DB->num_rows()==1)
    {
 
    $DB->delete();

    }

    $DB -> reset();
	$DB -> setTable('loainhanvien');

	$DB->select();
	 
	$itemLNV = '';
	while($cot = $DB->fetch_array())
	{
		if($cot['idloainhanvien']==1)
		{continue;}
		switch($cot['idloainhanvien'])
		{
			case 1:
				continue;
				break;
			case 2:
			case 3:
			case 4:
			{
				$itemLNV .='
		<tr> 
								
									 <td>'.$cot['tenloainhanvien'].'</td>
									
										<td class="text-center"><a style="margin-right: 17px" href="sualoainhanvien.php?idloainhanvien='.$cot['idloainhanvien'].'" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a></td>
									 </tr>
				';
			}

				break;
			default:{
				$itemLNV .='
				<tr> 
										
											 <td>'.$cot['tenloainhanvien'].'</td>
											
												<td class="text-center"><a style="margin-right: 17px" href="sualoainhanvien.php?idloainhanvien='.$cot['idloainhanvien'].'" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaLoaiNhanVien('.$cot['idloainhanvien'].')" class="btn btn-primary"><i class="fa fa-trash-o"></i></a></td>
											 </tr>
						';
			}
		}
		
	}

    
    
   
  }
?>
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