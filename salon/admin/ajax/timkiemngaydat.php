<?php
include '../../libraries/config.php';
include '../../libraries/class.database.php';
include '../../libraries/file_requick.php';
    $idtrangthai= $_GET['tt'];
    $ngaybatdau =$_GET['starDay'];
    $ngayketthuc = $_GET['endDay'];
    $idtrangthai = "idtrangthai =".$idtrangthai;
	$DB->reset();
	$DB->setTable('dondatdichvu');
    $DB->setBetween($idtrangthai,$ngaybatdau,$ngayketthuc);
    $DB->select();
	if($DB->num_rows()>0)
	{
	
		while($cot = $DB->fetch_array())
		{
			$k = $cot['iddondat'];
		}
		
    }
    echo $k;
?>

<div class="table-responsive bs-example widget-shadow">
				
                <table class="table table-bordered"> 
                    <thead> 
                            <tr>
                            
                                <th style="    text-align: center;">dịch vụ</th>
                                <th style="    text-align: center;">Khách hàng</th>
                                <th style="    text-align: center;">Ngày tạo</th>
                                
                                
                            
                            
                                
                            </tr>
                    </thead> 
                    <tbody> 
                    

<tr>
                                
                                <td>gh</td>
                                <td>vu van tu</td>
                                <td style="    text-align: center;">Vũ Văn Huy</td>
                               
                              
                                
                                
                            </tr>
                                    </tbody> 
                    
                
                </table> 
                </div>
                
            </div>