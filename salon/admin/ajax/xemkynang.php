<?php	
	include '../../libraries/config.php';
	include '../../libraries/class.database.php';
	include '../../libraries/file_requick.php';

    if(isset($_POST['idNV']))
    {
       
        $arrTabl=array('kynangnhanvien','dichvu');
        
        $DB -> reset();
        $DB -> setMultiTable($arrTabl);
        $DB -> setMultiWhereTable('kynangnhanvien.iddichvu','dichvu.iddichvu');
        
        $DB ->setMultiWhereValue('kynangnhanvien.idnhanvien',$_POST['idNV']);
        $DB-> selectMultiTable('*');
        
        if($DB->num_rows()>0)
        {
            $itemKNNV = '';
            while($cot = $DB->fetch_array())
            {
                $itemKNNV .= '<p> +'.$cot['tendichvu'].'</p>';
            }
            echo $itemKNNV;
        }else {
            echo "Không có kỹ năng";
        }
        
       
        
    }

?>
