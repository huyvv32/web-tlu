<?php
    include 'template/layout/header.php';
    $DB -> reset();
	$DB -> setTable('sanpham');
	$DB	-> setOrder('idSanPham DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,9,9,$link,$link.'?page={page}');
	 
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
    
    // load phần danh mục sản phẩm 
    $DB->reset();
    $DB->setTable('loaisanpham');
    $DB->select();
    if($DB->num_rows()>0)
    {
        $listLoaiSP = '';
        while($cot =$DB->fetch_array())
        {
            $listLoaiSP .= '<a href="#" onclick="loaiSanPham(1,'.$cot['idloaisanpham'].')" class="list-group-item">'.$cot['tenloaisanpham'].'</a>';
        }
    }
?>
<?php
  
?>
    
						
 <div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
        <?php
              include 'template/layout/menu.php';

        ?>
    </div>
    <div class="container" style="padding-top:30px">
        <div class="row">
           <div class=" col-md-9">
           <div id="kqsp">
           <?php
                echo $itemSP;
            ?>
             <div class=" col-md-12" style="text-align:center">
            <?php 
               echo $DB->html();
            ?>
        </div>
           </div>
           
           </div>
           <div class=" col-md-3">
           <div>
                    <form action="#">
                        <div class="form-group">
                            <span class="input-group">
                                <input type="text" id="txtTimKiem" placeholder="Tìm kiếm tên sản phẩm" class="form-control">
                                <span class="input-group-btn">
                                    <button onclick="timKiemSanPham()" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </span>
                        </div>
                    </form>
                </div>
           <div>
                  <h2>Sản phẩm</h2>
                  <div class="list-group">
                   <?php echo $listLoaiSP;?>
                  </div>
                </div>
           </div>
           
            
           
       
        </div>
    </div>

    

<?php
    include 'template/layout/footer.php';
?>