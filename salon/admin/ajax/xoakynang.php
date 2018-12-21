<?php
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
    include '../../libraries/file_requick.php';
    
    if(isset($_GET['iddichvu']))
    {
        $DB->reset();
        $DB->setTable('kynangnhanvien');
        $DB->setWhere('iddichvu',$_GET['iddichvu']);
        $DB->select();
        if($DB->num_rows()==1)
        {
            $DB->delete();
        }
    }
	
    if(isset($_GET['idnhanvien']))
	$DB->reset();
    $DB->setTable('kynangnhanvien');
    $DB->setWhere('idnhanvien',$_GET['idnhanvien']);
    $DB->select();
    if($DB->num_rows()>0)
    {
        while($cot = $DB->fetch_array())
        {
            $arrDichVu[] = $cot['iddichvu'];
        }
        $DB->reset();
       
    $DB->setTable('dichvu');
    $DB->setWhereIn('iddichvu',$arrDichVu);
    unset($arrDichVu);
    $DB->select();
    
    $itemdichvu='';
    if($DB->num_rows()>0)
    {
        while($cot = $DB->fetch_array())
        {
            $itemdichvu .='<tr>		
            <td>'.$cot['tendichvu'].'</td>
            <td class="text-center"><button onclick="xoaKyNang('.$cot['iddichvu'].','.$_GET['idnhanvien'].')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                    </tr>';
        }
    }
    }
    
    
    

   
?>
<table class="table table-bordered"> 
						<thead> 
							<tr>
								
								<th style="text-align: center;">Tên kỹ năng</th>
								<th style="width:127px;text-align:center">Sửa | Xóa</th>
							</tr>
						</thead> 
						<tbody> 
                            <?php
                                echo $itemdichvu;
                            ?>
							 </tbody> 
							<tfoot>
								<tr>
									<td style="text-align:center" colspan="7">
																			</td>
								</tr>
							</tfoot>
					</table> 
				</div>
                         