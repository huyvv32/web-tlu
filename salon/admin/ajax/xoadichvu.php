<?php
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';

	if(isset($_GET['iddv']))
	{
		//xóa các dịch vụ liên kết với kỹ năng nhân viên dựa vào id dịch vụ
		$DB -> reset();
    	$DB -> setTable('kynangnhanvien');
    	$DB->setWhere('iddichvu',$_GET['iddv']);
    	$DB->delete();
		// xóa dịch vụ dựa vào id được truyền vào
    	$DB -> reset();
    	$DB -> setTable('dichvu');
    	$DB->setWhere('iddichvu',$_GET['iddv']);
    	$DB->delete();

		// Cập nhật lại danh sách dịch vụ
		$DB -> reset();
		$DB -> setTable('dichvu');
		$DB	-> setOrder('iddichvu DESC');
		$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$link = "danhsachdichvu.php";
		$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 	$itemDV = '';
		while($cot = $DB->fetch_array($query))
		{
			$itemDV .='	<tr>
							<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddichvu'].'</td>
							<td>'.$cot['tendichvu'].'</td>
							
							<td style="    text-align: center;">'.$cot['ngaytao'].'</td>
							<td style="    text-align: center;">'.$cot['thoiluong'].' Phút</td>
							<td style="    text-align: center;">'.$cot['gia'].' VNĐ</td>
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
					<tfoot>
						<tr>
							<td style="text-align:center" colspan = "7">
										<?php
											echo $DB->html();
										?>
							</td>
						</tr>
					</tfoot>
				</table> 