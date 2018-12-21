
<?php
   include '../../libraries/config.php';
   include '../../libraries/class.database.php';
   include '../../libraries/file_requick.php';

if(isset($_GET['idTT'])){ 

   $DB -> reset();
   $DB -> setTable('tintuc');
   $DB->setWhere('idtintuc',$_GET['idTT']);
   $DB->delete();

  
   $DB -> reset();
   $DB -> setTable('tintuc');
   $DB	-> setOrder('idtintuc DESC');
   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   $link = 'danhsachtintuc.php';
   $query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
    
   $itemTinTuc = '';
   while($cot = $DB->fetch_array($query))
   {
       $itemTinTuc .='
       <tr>
       <td style="  text-align: center;  vertical-align: middle;">'.$cot['idtintuc'].'</td>
       <td>'.$cot['tieude'].'</td>
       <td>'.$cot['mota'].'</td>
       <td style="    vertical-align: middle;
text-align: center;">'.$cot['nguoitao'].'</td>
       <td style="    vertical-align: middle;
text-align: center;">'.$cot['ngaytao'].'</td>
       
       <td style="    text-align: center;"><img src="'.$cot['anh'].'" alt="" width="150" height="150"></td>
       
       <td class="text-center"><a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaTinTuc('.$cot['idtintuc'].')"  class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
       
   </tr>
               ';
   }
   
   
}
 ?> 

						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="    vertical-align: middle;
    text-align: center;">STT</th>
										<th style="    vertical-align: middle;
    text-align: center;">Tiêu đề</th>
										<th style="    vertical-align: middle;
    text-align: center;">Mô tả</th>
										<th>Người tạo</th>
										<th  style="  width: 110px;
    text-align: center;
    vertical-align: middle;">Ngày tạo</th>
										
										<th style="    vertical-align: middle;
    text-align: center;">Ảnh</th>
										
										<th style="width: 128px;text-align:center;vertical-align: middle;" >Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
							<?php
								echo $itemTinTuc;
							?>
										
								
							</tbody> 
								<tfoot>
								<tr>
									<td style="text-align:center" colspan="8"><?php	echo $DB->html(); ?></td>
								</tr>
								
								</tfoot>
						</table> 