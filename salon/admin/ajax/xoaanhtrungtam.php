
<?php
   

   include '../../libraries/config.php';
   include '../../libraries/class.database.php';
   include '../../libraries/file_requick.php';




if(isset($_GET['idAnh'])){ 

   $DB -> reset();
   $DB -> setTable('album');
   $DB->setWhere('id',$_GET['idAnh']);
   $DB->delete();

  
   $DB -> reset();
   $DB -> setTable('album');
   $DB	-> setOrder('id DESC');
   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   $link ='anhtrungtam.php';
   $query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
    
   $itemAlbum = '';
   while($cot = $DB->fetch_array($query))
   {
       $itemAlbum .='
       <tr>
       <td style="  text-align: center;  vertical-align: middle;">'.$cot['id'].'</td>
       <td style="text-align:center"><img src="../images/album/'.$cot['tenanh'].'" width="200" height="200"/></td>
       <td>'.$cot['tenanh'].'</td>
       <td>'.$cot['ngaytao'].'</td>
       
       
       <td class="text-center"><a href="suaanhtrungtam.php?idanhtrungtam='.$cot['id'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><button onclick="xoaAnhTrungTam('.$cot['id'].')"  class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
       
   </tr>
               ';
   }
   
}
 ?> 

<h4><a href="themanhtrungtam.php" class="btn btn-primary">Thêm Ảnh</a></h4>
						
						<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th style="text-align:center">STT</th>
										<th style="    text-align: center;">Ảnh</th>
                                        <th style="    text-align: center;">Tên Album</th>
										
										<th style="    width: 125px;
    text-align: center;">Ngày tạo</th>
										
										<th style="width:127px;text-align:center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
							
									<?php
									   echo $itemAlbum;
									?>
							</tbody> 
								
						
						</table> 