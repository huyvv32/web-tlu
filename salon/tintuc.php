<?php
    include 'template/layout/header.php';
    // lấy danh sách loại tin tức
    $DB -> reset();
    $DB -> setTable('loaitintuc');
    $DB->select();
    if($DB->num_rows()>0)
    {
        $lstLoaiTinTuc = '';
        while($cot=$DB->fetch_array())
        {
            $lstLoaiTinTuc .= '<a href="#" onclick="loaiTinTuc(1,'.$cot['idloaitintuc'].')" class="list-group-item">'.$cot['tenloaitintuc'].'</a>';
        }
    }

    $DB -> reset();
	$DB -> setTable('tintuc');
	$DB	-> setOrder('idtintuc DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
	 
	$itemTintuc = '';
	while($cot = $DB->fetch_array($query))
	{
		$tennhanvien = $cot['trangthai']==0 ? '':'';
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
?>
 <div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
        <?php
              include 'template/layout/menu.php';

        ?>
    </div>

    
      
 
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="kqtt">
                 <?php
                    echo $itemTintuc;
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
                        <?php
                            echo $DB->html();
                                 ?>
                        </div>
                </div>
               
               
            </div>
            <div class="col-sm-4" style="padding-top:15px">
                
                <div>
                  
                  <div class="list-group">
                  <a href="tintuc.php" class="list-group-item active">
                  Tin Tức
  </a>
                    <?php
                        echo $lstLoaiTinTuc;
                    ?>
                  
                  </div>
                </div>
               
            </div>
           
        </div>
        
       
    </div>
    
<?php
 
    include 'template/layout/footer.php';
?>