<?php
       include '../../libraries/config.php';
       include '../../libraries/class.database.php';
       include '../../libraries/file_requick.php';

       if(isset($_GET['idykienkhachhang']))
       {
           $DB->reset();
           $DB->setTable('ykienkhachhang');
           $DB->setWhere('idykienkhachhang',$_GET['idykienkhachhang']);
           
           $DB->select();
           if($DB->num_rows()==1)
           {
                $DB->reset();
                $DB->setTable('ykienkhachhang');
                $DB->setWhere('idykienkhachhang',$_GET['idykienkhachhang']);
                
              
                if($DB->delete())
                {
                    $DB->reset();
                    $DB->setTable('ykienkhachhang');
                    $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
                    if($DB->num_rows()>0)
                    {
                        $itemYkienKH = '';
                        while($cot = $DB->fetch_array())
                        {
                            $itemYkienKH .= '
                            <tr>
                            <td>'.$cot['idykienkhachhang'].'</td>
                            <td>'.$cot['tenkhachhang'].'</td>
                            <td class="text-center">'.$cot['anh'].'</td>
                            <td class="text-center">'.$cot['diachi'].'</td>
                            
                        
                        <td class="text-center">'.$cot['ngaytao'].'</td>
                            
                        
                            <td class="text-center"><a href="suaykienkhachhang.php?idYKienKhachHang='.$cot['idykienkhachhang'].'" style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                            
                        
                        </tr>
                        
                            ';
                        }
                    }
                }
           }
           else
           {
               echo '<script>location.replace("404.html");</script>';
           }
       }
?>
<table class="table table-bordered"> 
							<thead> 
									<tr>
										<th>STT</th>
                                        <th class="text-center">Tên khách hàng</th>
                                        <th class="text-center">Ảnh</th>
                                        <th class="text-center">Địa chỉ</th>
                                        <th class="text-center">Ngày tạo</th>
										<th class="text-center">Sửa | Xóa</th>
										
									</tr>
							</thead> 
							<tbody> 
								 <?php
								 	echo $itemYkienKH;
								 ?>
                                   
									
										
								
							</tbody> 
								<tr>
									<td colspan="6" class="text-center">
										<?php
											echo $DB->html();
										?>
									</td>
								</tr>
						
						</table> 