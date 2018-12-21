<?php
   include '../../libraries/config.php';
   include '../../libraries/class.database.php';
   include '../../libraries/file_requick.php';

	echo '<script>alert("'.$GET['idloaithanhvien'].'");</script>';
    if(isset($GET['idloaithanhvien']))
    {
      
      
       
        $DB->reset();
        $DB->setTable('loaithanhvien');
        $DB->setWhere('idloaithanhvien',$GET['idloaithanhvien']);
        $DB->delete();
       
    }
    $DB -> reset();
	$DB -> setTable('loaithanhvien');
	$DB -> select();
	 
	$itemLNV = '';
	while($cot = $DB->fetch_array($query))
	{
		if($cot['idloaithanhvien']==1)
		{
			$itemLNV .='
		<tr> 
								
									 <td>'.$cot['tenloaithanhvien'].'</td>
									 <td>'.$cot['phantramuudai'].' %</td>
									
										
									 </tr>
				';
		}else
		{
			$itemLNV .='
		<tr> 
								
									 <td>'.$cot['tenloaithanhvien'].'</td>
									 <td>'.$cot['phantramuudai'].' %</td>
									
										<td class="text-center"><a href="sualoaikhachhang.php?idloaithanhvien='.$cot['idloaithanhvien'].'" style="margin-right: 17px" href="#" class="btn btn-danger"><i class="fa fa-pencil-square-o"></i></a><a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a></td>
									 </tr>
				';
		}
		
	}
	
?>
<table class="table table-bordered"> 
							<thead> 
								<tr> 
								
									<th>Khách Hàng</th>
									<th>Phần trăm ưu đãi</th> 
                                    <th class="text-center">Sửa | Xóa</th> 
								</tr> 
							</thead> 
							<tbody> 
								<?php
								      echo $itemLNV;
									 ?>
							</tbody> 
								
						</table> 