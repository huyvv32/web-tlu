
<?php
   

   include '../../libraries/config.php';
   include '../../libraries/class.database.php';
   include '../../libraries/file_requick.php';




if(isset($_GET['idcs'])){ 

   $DB -> reset();
   $DB -> setTable('coso');
   $DB->setWhere('idcoso',$_GET['idcs']);
   $DB->delete();

  
  
   $DB -> reset();
   $DB -> setTable('coso');

   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   $link = $_SERVER['PHP_SELF'];
   $query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
    
   $itemCS = '';
   while($cot = $DB->fetch_array($query))
   {
       $itemCS .='
       <tr> 
                               
                                    <td>'.$cot['tencoso'].'</td>
                                   
                                    <td class="text-center"><a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'&trangthai='.$cot['trangthai'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaCoSo('.$cot['idcoso'].')"  class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                    </tr>
               ';
   }
   
   
}
 ?> 
<h4><a href="themmoidichvu.php" class="btn btn-primary">Thêm Cơ sỏ</a></h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								
									<th>Tên Cơ Sở</th> 
                                    <th class="text-center">Sửa | Xóa</th> 
								</tr> 
							</thead> 
							<tbody> 
								<?php
								      echo $itemCS;
									 ?>
							</tbody> 
								
						</table> 