<?php

    if(!isset($_GET['masp']))
    {
        header("Location:sanpham.php");
    }

    include 'template/layout/header.php';
   
?>
<?php
    $masp = $_GET['masp'];
    $DB->reset();
    $DB->setTable('sanpham');
    $DB->setWhere('idsanpham',$masp);
    $DB->select();
    if($DB->num_rows()==1)
    {
        $cot = $DB->fetch_array();
        if(($cot['giakhuyenmai']>0)&&($cot['giakhuyenmai']<$cot['giaban']))
        {
            $giahientai = $cot['giakhuyenmai'];
        }else
        {
            $giahientai = $cot['giaban'];
        }
    }else
    {
        header('location:404.html');
    }
    
?>
						
 <div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
        <?php
              include 'template/layout/menu.php';

        ?>
    </div>
    <div class="container" style="padding-top:30px">
        <div class="row">
          
                <div class="col-md-3">
                    <img src="images/anhsp/<?php echo $cot['anhsp']?>" onerror="this.src=\'images/anhsp/error.png\'" alt="">
                </div>
                <div class="col-md-6">
                    <p><strong><?php echo $cot['tensanpham'];?></strong></p>
                    <p><strong>Giá: </strong> <?php echo number_format($giahientai);?> VND</p>
                    <p><?php echo $cot['mota'];?></p>
                    <p><strong>Hãng sản xuất: </strong> <?php echo $cot['hangsanxuat'];?></p>
                    <p><strong>Khuyến mại: </strong> <?php echo $cot['khuyenmai'];?></p>
                    <p><strong>Bảo hành: </strong> <?php echo $cot['baohanh'];?></p>
                    <p><strong>Địa điểm bán: </strong> <?php echo $cot['diadiemban'];?></p>
                    
                    <p><strong>Ghi chú: </strong> <?php echo $cot['ghichu'];?></p>
                    
                    
                    <p><strong>Số lượng đặt: </strong><select style="font-size:17px"  id="soluongdat">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></p>
                    <br/>
                    <a href="#" class="themgiohang btn btn-primary" onclick="themGioHang(<?php echo $cot['idsanpham'];?>,$('#soluongdat').val())" >Thêm giỏ hàng</a>
                </div>
            
        </div>
        <div class="row">
            <div class="chitiet">
                <div class="col-md-12" style="margin-top:23px;background:white">
                        <h2>Chi tiết</h2>
                        <hr>
                        <?php
                            echo $cot['noidung'];
                        ?>
                </div>
                
            </div>
        </div>
    </div>

 
<?php
    include 'template/layout/footer.php';
?>