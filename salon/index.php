<?php
	include 'template/layout/header.php';

	// lấy danh sách slider
	$DB->reset();
	$DB->setTable('slider');
	$DB->setOrder('stt ASC');
	$DB->setLimit('0,4');
	$DB->select();
	if($DB->num_rows()>0)
	{
		$i=0;
		while($cot = $DB->fetch_array())
		{
			if($cot['stt']==1)
			{
				$circleButton .= '<li data-target="#carousel-id" data-slide-to="'.$i.'" class="active"></li>';
				$itemSider .= '<div class="item active">
									<a href="'.$cot['link'].'">
									<img src="images/slider/'.$cot['anh'].'">
									</a>
								</div>';
			}
			else
			{
				$circleButton .= '<li data-target="#carousel-id" data-slide-to="'.$i.'" class=""></li>';
				$itemSider .= '<div class="item">
									<a href="'.$cot['link'].'">
									<img src="images/slider/'.$cot['anh'].'">
									</a>
								</div>';
			}
			$i++;
			
		}
		
	}
	// lây video
	$DB->reset();
	$DB->setTable('video');
	$DB->setOrder('idvideo DESC');
	$DB->setLimit('0,1');
	$DB->select();
	if($DB->num_rows()>0)
	{
		$itemVideo='';
		$cot = $DB->fetch_array();
		$itemVideo = $cot['link'];
	}
	// lấy danh sách dịch vụ mới nhất
	$DB->reset();
	$DB->setTable('dichvu');
	$DB->setOrder('iddichvu DESC');
	$DB->setLimit('0,8');
	$DB->select();
	if($DB->num_rows()>0)
	{
		
		while($cot = $DB->fetch_array())
		{
			
			$itemDichVu .= '<div class="col-xs-6 col-md-3">
								<div class="thumbnail" >
								<a href="chitietdichvu.php?iddichvu='.$cot['iddichvu'].'"><img title="'.$cot['tendichvu'].'" style="height:200px" src="images/anhdichvu/'.$cot['anh'].'" alt="..."></a>
								<div class="caption text-center" style="color:black">
					  			
					  
							</div>
			  				</div>
							</div>';
			
		}
		
	}
	// lay danh sách tin khuyến mại
	$DB->reset();
	$DB->setTable('tintuc');
	$DB->setOrder('idtintuc DESC');
	$DB->setWhere('idloaitintuc',1);
	$DB->setLimit('0,3');
	$DB->select();
	if($DB->num_rows()>0)
	{
		
		while($cot = $DB->fetch_array())
		{
			if(strlen($cot['mota'])>100)
			{
				$mota = substr($cot['mota'],0,100) . '...';
			}
			else
			{
				$mota = $cot['mota'];
			}
			$itemTinTuc .= '
			<div class="article" style="margin-bottom: 14px;" >
                                 <div class="row">
                                 <div class="col-sm-2">
                                  <img style="width:75px;height:75px" class="article-image img-responsive img-rounded hidden-xs" src="images/anhtintuc/'.$cot['anh'].'"  alt="">
                              </div>
                              <div class="col-sm-10">
                              <h3 style="font-size:15px;text-transform: uppercase;"><a href="chitiettintuc.php?idtintuc='.$cot['idtintuc'].'">'.$cot['tieude'].'</a></h3>
                             
                              <p style="font-size:14px">'.$mota.'</p>
                             
                            </div>
                           </div>
          </div>  
			';
			
		}
		
	}
?>
	<title>Trang chủ</title>
	<style>
		.item{
				height:429px;
			}
	</style>
</head>
<body >
		
<!-- banner -->
<div class="banner">
	<div class="banner-dott">
			<?php
				include 'template/layout/menu.php';
			?>
				<!-- w3-banner -->
				<div >
				
				<div id="carousel-id" class="carousel slide" style="height:429px" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php
							echo $circleButton;
						?>
					</ol>
					<div class="carousel-inner">
						<?php
							echo $itemSider;
						?>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
				
			</div>
</div>
<!-- //banner -->

<div class="container">

<h1 class="text-center">Dịch vụ mới</h1>
<div class="row">
			<?php
				echo $itemDichVu;
			?>
  </div>
</div>

        <div class="row text-center">
            
             <a href="danhsachdichvu.php"class="btn btn-primary">Tìm hiểu tất cả dịch vụ của chúng tôi</a>  <hr> 
           
        </div>
      
</div>


<div class="container" style="color:white;background:green">
<h1 class="text-center">Tại sao nên chọn Anger Spa</h1>
<div class="row">
  <div class="col-sm-6 col-md-3"  >
    <div class="thumbnail" style="border:none;background:green">
      	<img src="https://thucucclinics.com/wp-content/themes/thucuc/assets/img/rea/reason-1.png" alt="...">
      	<div class="caption text-center" style="color:white">
        	<h4>CÔNG NGHỆ HIỆN ĐẠI VƯỢT TRỘI</h4>
        	<p>Anger Spa ứng dụng các công nghệ hiện đại, máy móc tiên tiến hàng đầu</p>
        	
      	</div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" style="border:none;background:green">
      	<img src="https://thucucclinics.com/wp-content/themes/thucuc/assets/img/rea/reason-2.png" alt="...">
      	<div class="caption text-center " style="color:white">
        	<h4>CƠ SỞ VẬT CHẤT SANG TRỌNG</h4>
        	<p>Nằm tại trung tâm thành phố, với không gian được bài trí chuyên nghiệp</p>
        	
      	</div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail"  style="border:none;background:green">
      	<img src="https://thucucclinics.com/wp-content/themes/thucuc/assets/img/rea/reason-3.png" alt="...">
      	<div class="caption text-center" style="color:white">
        	<h4>KỸ THUẬT CHUYÊN NGHIỆP</h4>
        	<p>Kỹ thuật viên tại Thu Cúc Clinics được đào tạo bài bản theo tiêu chuẩn quốc tế</p>
       
      	</div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3"  >
    <div class="thumbnail" style="border:none;background:green">
      	<img src="https://thucucclinics.com/wp-content/themes/thucuc/assets/img/rea/reason-4.png" alt="...">
      	<div class="caption text-center" style="color:white">
        	<h4>SẢN PHẨM DỊCH VỤ TIN CẬY</h4>
        	<p>Sản phẩm được thẩm định kỹ và cam kết về chất lượng khi sử dụng</p>
        
      	</div>
    </div>
  </div>
 
</div>
<hr>
</div>
<div class="container">
<div class="row">
            <div class="col-sm-6">
			<h2>Tin khuyến mại</h2>
               
		 
			<?php
				echo $itemTinTuc;
			?>
          
          
                  
            </div>
            <div class="col-sm-6" >
                
                  <h2>Video</h2>
                  <div style="position:relative;height:0;padding-bottom:56.27%">
				  <?php
				 	echo $itemVideo; 
				  ?>
				  </div>
                </div>
               
            </div>
        </div>
</div>
<!-- Price-section -->
	<div class="price" id="daotaonghe">
		<div class="col-md-12 w3l_about_bottom_left text-center" style="padding-top:20%">
				

						<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalDaoTao">Đăng ký ngay</a>
				
				
		</div>
	 
		<div class="clearfix"> </div>
	</div>
<!-- //Price-section -->

<!-- Our styles -->
	<?php
		include 'template/dichvu_tpl.php';
	?>
<!-- Our styles -->

	<?php
		include 'template/album_tpl.php';
	?>

<!-- Clients -->
	<?php
		include 'template/ykienkhachhang_tpl.php';
	?>
<!-- //Clients -->


<?php
	include 'template/layout/footer.php';
?>