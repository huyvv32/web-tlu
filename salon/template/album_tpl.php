<?php
    $DB->reset();
    $DB->setTable('album');
    $DB->setOrder("id desc");
    $DB->setLimit("0,8");
    $DB->select();
    

    $itemAlbum='';
    while($cot = $DB->fetch_array())
    {
        $itemAlbum .= '<li    data-src="images/album/'.$cot['tenanh'].'" data-responsive-src="images/'.$cot['tenanh'].'"> 
                             <div class="w3layouts_gallery_grid1 box">
                                <a href="#">
                                    <img src="images/album/'.$cot['tenanh'].'" alt=" " class="img-responsive" />
                                    <div class="overbox">
                                    <h4 class="title overtext">Xem</h4>
                    
                                    </div>
                                </a>
                             </div>
                         </li>';
    }
?>
<!-- gallery -->
<div class="team-bottom gallery" id="album">
	<h3 class="wthree_head">Ảnh trung tâm</h3>
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">

					<?php echo $itemAlbum;?>
					
					
				</ul>
			</div>
		<div class="clearfix"></div>
</div>
<!-- //gallery -->