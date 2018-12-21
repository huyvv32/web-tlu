
<?php
include '../../libraries/config.php';
include '../../libraries/class.database.php';
include '../../libraries/file_requick.php';
	
  if(isset($_GET['iddc']))
  {
    $DB->reset();
    $DB->setTable('thongtin');
    $DB->setWhere('idthongtin',$_GET['iddc']);
    $DB->select();
    if($DB->num_rows()==1)
    {
    
     
      $cot = $DB->fetch_array();
      
        $itemThongTin = '
                 <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">'.$cot['diachi'].'</h4>
                            </div>
                          <div class="modal-body">
                              <p><strong>Email:</strong> '.$cot['email'].'</p>
                                <hr/>
                              <p><strong>Sky:</strong> '.$cot['sky'].'</p>
                                <hr/>
                              <p><strong>Facebook:</strong> '.$cot['fb'].'</p>
                              </div>
                              <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
                              ';
  
      
      
    }
    echo $itemThongTin;
  }
 
?>

