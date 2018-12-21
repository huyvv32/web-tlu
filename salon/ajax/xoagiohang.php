<?php
    	
        session_start();
        include '../libraries/class.database.php';
        include '../libraries/config.php';
        include '../libraries/file_requick.php';
    

    
        if(isset($_SESSION['giohang']))
        { 
               
           
         
            
            foreach ($_SESSION['giohang'] as $cotGH) {
                
                if($cotGH['masanpham']!=$_POST['masanpham'])
                {
                    $giohangdaco[]=array("masanpham"=>$cotGH['masanpham'],"tensanpham"=>$cotGH['tensanpham'],"soluong"=>$cotGH['soluong'],"dongia"=>$cotGH['dongia']);
                }
            }
            
         
                $_SESSION['giohang'] = $giohangdaco;
            
           
        
        }
      
?>
<?php
    if(count($_SESSION['giohang'])!=0)
    {?>
      <?php
         if(isset($_SESSION['giohang']))
         {
    ?>
    <br>  
  <h2>Giỏ hàng</h2>
  <br>           
  <table class="table table-striped" id="ketquaGH">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        <th>Thành tiền</th>
      </tr>
    </thead>
    <tbody >
    <?php
            $tongsp = count($_SESSION['giohang']);
             $tongsoluongGH = 0 ;
             $tongtienGH = 0 ;
             foreach($_SESSION['giohang'] as $value)
        {?>
            <tr>
                        <td><?php echo $value['masanpham'];?></td>
                           <td><?php  echo $value['tensanpham'];?></td>
                           <td>
                                <select  id="soluongdat" onchange = "suaGioHang(<?php echo $value['masanpham'];?>,$(this).val())">
                                    <?php
                                        for($i = 1 ; $i<6;$i++)
                                        {
                                            if($value['soluong']==$i)
                                            {
                                                echo '<option value='.$i.' selected>'.$i.'</option>';
                                            }
                                            else
                                            {
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                                <?php 
                                    
                                ?>
                           </td>
                           <td><?php echo number_format($value['dongia']);?> VNĐ</td>
                           <td><?php echo number_format($value['soluong']*$value['dongia']);?> VNĐ</td>
                           <td><a href="#" class="btn btn-danger" onclick="xoaGioHang(<?php echo $value['masanpham'];?>)">Xóa</a></td>
                       </tr>
       <?php
           
            $tongsoluongGH += $value['soluong'];
            $tongtienGH += $value['soluong']*$value['dongia'];
        }
       
      ?>
      
    </tbody>
    <tfoot>
    <tr>
            <th scope="row">Thanh toán</th>
            <td><?php echo $tongsp;?></td>
            <td><?php echo $tongsoluongGH;?></td>
            <td></td>
            <td><?php echo number_format($tongtienGH); ?> VNĐ</td>
            <td><a href="#" class="btn btn-primary " data-toggle="modal" data-target="#dathangsanpham">Đặt hàng</a></td>
        </tr>
    </tfoot>
  </table>
  <div class="modal video-modal fade" id="dathangsanpham" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
			
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
                            <h3 class="text-center">Đặt Hàng</h3>
                            <hr>
                            <div class="fromdatdichvu" style="padding: 0px 22px 10px 22px;">
                           
                            
                           
                           
                        <?php
                            if(!isset($_SESSION['dangnhap']))
                            {
                                echo '<span style="color:red">(*) Đăng nhập tài khoản để nhận được ưu đãi</span>. <hr>';
                                $thanhtoan ='<span>Thanh Toán:'.$tongsp.'sản phẩm  - Tổng tiền :'.number_format($tongtienGH).'VNĐ</span><br/>';
                            }
                            else
                            {
                                $d->reset();
                                $d->setTable('thanhvien');
                                $d->setWhere('Email',$_SESSION['dangnhap']['email']);
                                $d->select();
                               
                                $cot = $d->fetch_array();
                                $hovaten = $cot['HoVaTen'];
                                $diachi =$cot['DiaChi'];
                                $sodienthoai = $cot['SoDienThoai'];
                                $email = $cot['Email'];
                                
                                $idLoaiThanhVien = $cot['IdLoaiThanhVien'];
                                $d->reset();
                                $d->setTable('loaithanhvien');
                                $d->setWhere('IdLoaiThanhVien',$idLoaiThanhVien);
                                $d->select();
                                
                                $cotLoaiThanhVien = $d->fetch_array();
                                $tenloaithanhvien = $cotLoaiThanhVien['tenLoaiThanhVien'];
                                $phantramuudai = $cotLoaiThanhVien['uuDai'];
                                
                                $thanhtoan ='<span>Thanh Toán:'.$tongsp.' sản phẩm  - Tổng tiền:'.number_format($tongtienGH).'VNĐ</span><br/>';
                                $tongtienGH -=(($tongtienGH*$phantramuudai)/100);
                                $thanhtoan .= '<span>Bạn là thành viên :'.$tenloaithanhvien.' Khuyến mại: '.$phantramuudai.' %- Tổng tiền: '.number_format($tongtienGH).'VNĐ</span><br/>';
                            }
                        ?>
                       <form action="" method = "POST">
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" value="<?php echo $hovaten;?>" required name="hovaten" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ :</label>
                                <input type="text" name="diachi" required value="<?php echo $diachi;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện Thoại:</label>
                                <input type="text" name="sodienthoai" required  value="<?php echo $sodienthoai;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" required value="<?php echo $email;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ghi chú</label>
                                <textarea name="ghichu" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                            <hr/>
                            <?php echo $thanhtoan;?>
                                 
                            <hr/>
                            <div class="from-group text-center">
                                <input type="hidden" name="tongtien" value="<?php echo $tongtienGH;?>" >
                               
                                <input type="submit" value="Đặt Hàng" name="dathang" class="btn btn-primary">
                            </div>

                        </form>
                            </div>
                            
					</div>
			</div>
		</div>
	</div>
  <?php
    }
    else
    {
        echo '<h1>Không có sản phẩm nào trong giỏ hàng</h1>';
    }
  ?>


      <?php
            echo '<script>$("#contentGH").html("<a href=\"giohang.php\"><i class=\"glyphicon glyphicon-shopping-cart\"></i> <span>'.number_format($tongtienGH).' VND</span> (<span>'.$tongsp.'</span> SP)</a>")</script>';

  

     }else
       {
        echo '<script>$("#contentGH").html("<a href=\"giohang.php\"><i class=\"glyphicon glyphicon-shopping-cart\"></i> <span>0 VND</span> (<span>0</span> SP)</a>");</script>'; 
        echo '<script>$("#divgiohang").html("<h1>Không có sản phẩm nào trong giỏ hàng</h1>")</script>';
       }
      ?>
    
