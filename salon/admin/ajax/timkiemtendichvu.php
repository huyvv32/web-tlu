<?php
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';
	if(isset($_GET['keyword']))
	{ 
		$DB -> reset();
    	$DB -> setTable('dichvu');
		$DB->setWhereLike('tendichvu',$_GET['keyword']);
		$DB	-> setOrder('iddichvu DESC');
		$DB->select();
		$itemDV = '';
		while($cot = $DB->fetch_array($query))
		{
			$itemDV .='<tr>
							<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddichvu'].'</td>
							<td>'.$cot['tendichvu'].'</td>
							
							<td style="text-align: center;">'.$cot['ngaytao'].'</td>
							<td style="text-align: center;">'.$cot['thoiluong'].' Phút</td>
							<td style="text-align: center;">'.$cot['gia'].' VNĐ</td>
							<td class="text-center"><a href="suadichvu.php?iddv='.$cot['iddichvu'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button  onclick="xoaDichVu('.$cot['iddichvu'].','.$_GET['page'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
						</tr>';
    }
    
}
?>
			<table class="table table-bordered"> 
					<thead> 
						<tr>
							<th style="text-align:center">STT</th>
							<th style="text-align: center;">Tên dịch vụ</th>
						
							<th style="width: 125px;text-align: center;">Ngày tạo</th>
							<th style="text-align: center;width: 131px;">Thời lượng</th>
							<th style="text-align: center;width: 131px;">Giá</th>
							<th style="width:127px;text-align:center">Sửa | Xóa</th>
						</tr>
					</thead> 
					<tbody> 
						<?php
							echo $itemDV;
						?>
					</tbody> 
							
			</table> 