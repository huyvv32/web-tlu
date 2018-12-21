<?php
   

	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';

 


if(isset($_GET['idsp'])){ 

   

    $DB -> reset();
    $DB -> setTable('sanpham');
    $DB->setWhere('idsanpham',$_GET['idsp']);
    $DB->delete();

   
    $DB -> reset();
	$DB -> setTable('sanpham');
	$DB	-> setOrder('idsanpham DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = 'dssanpham.php';
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemDV = '';
	while($cot = $DB->fetch_array($query))
	{
		$itemDV .='
		<tr>
										<td style="  text-align: center;  vertical-align: middle;">'.$cot['idsanpham'].'</td>
										<td>'.$cot['tensanpham'].'</td>
									
										<td style="    text-align: center;">'.number_format($cot['giaban']).'</td>
                                        <td style="    text-align: center;">'.number_format($cot['giakhuyenmai']).'</td>
                                        <td style="    text-align: center;"><buton onclick="moreDV('.$cot['iddondat'].')" class="btn btn-primary" data-toggle="modal" data-target="#chitietdondatdv" ><i class="fa fa-eye"></i></button></td>
										
										<td class="text-center"><a href="suasanpham.php?idsanpham='.$cot['idsanpham'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button  onclick="xoaSanPham('.$cot['idsanpham'].','.$_GET['page'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
										
									</tr>
				';
	}
	
    
}
   
    



?>
	
    <table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">STT</th>
										<th style="    text-align: center;">Tên sản phẩm</th>
										
										<th style="    width: 125px;
    text-align: center;">Giá bán</th>
										<th style="    text-align: center;
    width: 131px;">Giá KM</th>
	<th style="    text-align: center;
    width: 131px;">Chi tiết</th>
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