<?php
   include '../libraries/config.php';
   include '../libraries/class.database.php';
   
   include '../libraries/file_requick.php';
    // lấy danh sách loại tin tức
    if(isset($_GET['idloaitintuc']))
    {
       
    
    
    

    $DB -> reset();
    $DB -> setTable('tintuc');
    $DB->setWhere('idloaitintuc',$_GET['idloaitintuc']);
	$DB	-> setOrder('idtintuc DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemTintuc = '';
	while($cot = $DB->fetch_array($query))
	{
		
		$itemTintuc .= ' <div class="article" style="border-bottom:1px solid black ;padding-top:10px">
                                 <div class="row">
                                 <div class="col-sm-3">
                                  <img class="article-image img-responsive img-rounded hidden-xs" src="images/anhtintuc/'.$cot['anh'].'" onerror="this.src=\'images/anhtintuc/error.png\'" alt="Lorem ipsum dolor sit amet">
                              </div>
                              <div class="col-sm-9">
                              <h3><a href="chitiettintuc.php?idtintuc='.$cot['idtintuc'].'">'.$cot['tieude'].'</a></h3>
                              <p>Ngày đăng: '.$cot['ngaytao'].'</p><br/>
                              <p>'.$cot['mota'].'</p>
                              <p class="text-right" style="padding-bottom:15px"><a href="chitiettintuc.php?idtintuc='.$cot['idtintuc'].'" class="btn btn-primary">Đọc tiếp</a></p>
                            </div>
                           </div>
          </div> ';
    }
}
echo $itemTintuc;


?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
    <?php
    echo $DB->htmlAjax('loaiTinTuc',$_GET['idloaitintuc']);
    ?>
</div>