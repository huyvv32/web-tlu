
<?php
include '../../libraries/config.php';
include '../../libraries/class.database.php';
include '../../libraries/file_requick.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
  if(isset($_GET['iddondat']))
  {
    $DB->reset();
    $DB->setTable('dondatdichvu');
    $DB->setWhere('iddondat',$_GET['iddondat']);
    $DB->select();
    if($DB->num_rows()==1)
    {
    
     
      $cot = $DB->fetch_array();
      
        $itemThongTin = '
                 <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">'.$cot['iddondat'].'-'.$cot['tendichvu'].'</h4>
                            </div>
						  <div class="modal-body">
						  <p><strong>Địa chỉ:</strong> '.$cot['diachi'].'</p>
						  <hr/>
						  <p><strong>Số điện thoại:</strong> '.$cot['sodienthoai'].'</p>
						  <hr/>
						  <p><strong>Email:</strong> '.$cot['email'].'</p>
						  <hr/>
						  <p><strong>Ngày làm:</strong> '.date_format(date_create($cot['ngaylam']),"d/m/Y").'</p>
						  <hr/>
						<p><strong>Giờ làm: </strong><input type="time" disabled value="'.$cot['thoigianlam'].'">- Thời lượng: '.$cot['thoiluong'].' Phút</p>
						<hr/>
                              <p><strong>Ghi chú:</strong> '.$cot['ghichu'].'</p>
                               
                             
                              </div>
                              <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
                              ';
  
      
      
    }
    echo $itemThongTin;
  }
 
?>

