<?php
   

   include '../libraries/config.php';
   include '../libraries/class.database.php';
   
   include '../libraries/file_requick.php';
    
   if(isset($_GET['tuTimKiem']))
   {
    $DB -> reset();
	$DB -> setTable('dichvu');
	$DB->setWhereLike('tendichvu',$_GET['tuTimKiem']);
	$DB	-> setOrder('iddichvu DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='dichvu.php';
	$DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	
    $itemDV = '';
    
  
        while($cot = $DB->fetch_array($query))
        {
            $itemDV .=' <div class="article" style="margin-bottom:30px;margin-top:10px">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img  hidden-xs" src="images/anhdichvu/'.$cot['anh'].'" onerror="this.src=\'images/anhtintuc/error.png\'" alt="Lorem ipsum dolor sit amet">
                                </div>
                                <div class="col-sm-9">
                                    <h3><a href="chitietdichvu.php?iddichvu='.$cot['iddichvu'].'">'.$cot['tendichvu'].'</a></h3>
                                    <p>'.$cot['mota'].'</p>
        
                                </div>
                            </div>
                        </div> ';
        }
}
echo $itemDV;
		?>