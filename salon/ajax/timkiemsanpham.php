<?php
   

   include '../libraries/config.php';
   include '../libraries/class.database.php';
   
   include '../libraries/file_requick.php';
    
   if(isset($_GET['tuTimKiem']))
   {
    $DB -> reset();
	$DB -> setTable('sanpham');
	$DB->setWhereLike('tensanpham',$_GET['tuTimKiem']);
	$DB	-> setOrder('idsanpham DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='sanpham.php';
	$DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	
	 
	$itemSP = "";
    while($cot = $DB->fetch_array())
    {
        $gia ='<p class="item_price">'.number_format($cot['giaban']).' VND<br></p>';
        if(($cot['giakhuyenmai']!=0)&&($cot['giakhuyenmai']<$cot['giaban']))
        {
            $gia = '<p class="item_price"><del>'.number_format($cot['giaban']).' VND</del> - '.number_format($cot['giakhuyenmai']).' VND</p>';
        }
        if(strlen($cot['tensanpham'])>25)
        {
            $tensanpham = substr($cot['tensanpham'],0,25).'...';
        }
        else
        {
            $tensanpham = $cot['tensanpham'];
        }
        $itemSP .= ' <div class="col-sm-6 col-md-4">
        <div class="simpleCart_shelfItem">
        <div class="thumbnail">
            <img src="images/anhsp/'.$cot['anhsp'].'"  style="width:300px;height:242px" onerror="this.src=\'images/anhsp/error.png\'" alt="">
            <div class="caption">
            <p><strong>'.$tensanpham.'</strong></p>
            '.$gia.'
            <p class="text-center">
            
            <a href="chitietsanpham.php?masp='.$cot['idsanpham'].'" class="btn btn-primary">Xem chi tiết</a>
            <a href="#" class="btn btn-danger" onclick="themGioHang('.$cot['idsanpham'].',1)">Thêm giỏ hàng</a>
            </p>
            </div>
        </div>
        </div>
        
    </div>';
    }
   }
   echo $itemSP;
		?>