<?php
  
    include '../libraries/config.php';
    include '../libraries/class.database.php';
    include '../libraries/file_requick.php';
	$DB -> reset();
	$DB -> setTable('dichvu');
	$DB	-> setOrder('iddichvu DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
    $output  = '<table class="table table-bordered"> 
    <thead> 
            <tr>
                <th style="text-align:center">STT</th>
                <th style="    text-align: center;">Tên dịch vụ</th>
                <th style="    text-align: center;">Mô tả</th>
                <th style="    width: 125px;
text-align: center;">Ngày tạo</th>
                <th style="    text-align: center;
width: 131px;">Thời lượng</th>
<th style="    text-align: center;
width: 131px;">Giá(VNĐ)</th>
               
                
            </tr>
    </thead> 
    <tbody> 
       ';
    
	while($cot = $DB->fetch_array($query))
	{
		$output  .='
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddichvu'].'</td>
										<td>'.$cot['tendichvu'].'</td>
										<td>'.$cot['mota'].'</td>
										<td style="    text-align: center;">'.$cot['ngaytao'].'</td>
										<td style="    text-align: center;">'.$cot['thoiluong'].' Phút</td>
										<td style="    text-align: center;">'.$cot['gia'].'</td>
										<td class="text-center"><a href="suadichvu.php?iddv='.$cot['iddichvu'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button  onclick="xoaDichVu('.$cot['iddichvu'].','.$_GET['page'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
										
									</tr>
				';
    }
    $output.='</tbody> 
							
						
    </table> ';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download.xls');
    echo $output ;
?>

						
						
						
							   
								
							
							   
								
							
			