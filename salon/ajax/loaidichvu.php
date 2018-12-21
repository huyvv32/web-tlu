<?php
   include '../libraries/config.php';
   include '../libraries/class.database.php';
   
   include '../libraries/file_requick.php';
    // lấy danh sách loại tin tức
    if(isset($_GET['idloaidichvu']))
    {
       
    
    
    

    $DB -> reset();
    $DB -> setTable('dichvu');
    $DB->setWhere('idloaidichvu',$_GET['idloaidichvu']);
	$DB	-> setOrder('iddichvu DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
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

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
    <?php
    echo $DB->htmlAjax('loaiDichVu',$_GET['idloaidichvu']);
    ?>
</div>