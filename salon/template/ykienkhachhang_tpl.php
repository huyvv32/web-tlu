
<?php
    $DB->reset();
    $DB->setTable('ykienkhachhang');
    $DB->setOrder("idykienkhachhang desc");
    $DB->setLimit("0,10");
    $DB->select();
    $itemYKien='';
    while($cot = $DB->fetch_array())
    {
        $itemYKien .='<li>
                            <img src="images/khachhang/'.$cot['anh'].'" alt="" />
                            <p style="color:black">'.$cot['ykien'].'</p>
                            <div class="client">
                            <h5 style="color:black">'.$cot['tenkhachhang'].'</h5>
                            </div>
                    </li>';
    }    
?>
<div class="clients" id="ykienkhachhang">
	<div class="banner-dott1">
	<h3 class="wthree_head">Ý Kiến Khách Hàng</h3>
		<div class="container">
			<h4>Khách hàng nói gì về chúng tôi </h4>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
                        <?php
                            echo  $itemYKien;
                        ?>
                   
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>