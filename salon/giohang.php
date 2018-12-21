<?php
    //--------------dat hang --------------
 
?>
<?php
    include 'template/layout/header.php';
    session_start();

    if(isset($_POST['dathang']))
    {
        
        
        $dondat['tendangnhap'] = $_POST['hoten'];
        $dondat['noigiao'] = $_POST['diachi'];
        $dondat['sodienthoai'] = $_POST['sodienthoai'];
        $dondat['email'] = $_POST['email'];
        $dondat['ghichu'] = $_POST['ghichu'];
        $dondat['tongtien'] = $_POST['tongtien'];
        $dondat['ngaydat'] = date('Y-m-d H:i:s');
        $dondat['tennhanvien']='';
        $dondat['idtrangthai'] = 1;

        // thêm dữ liệu vào bảng đơn đặt sẳn phẩm
        $DB->reset();
        $DB->setTable('dondatsanpham');
        $DB->insert($dondat);
       
        // thêm dữ liệu vào bảng chi tiết đơn đặt
        // b1 lấy id cuối cùng của bảng đơn đặt sản phẩm
        $DB->reset();
        $DB->setTable('dondatsanpham');
        $DB->setOrder("iddondat desc");
	    $DB->setLimit("0,1");
        $DB->select('`iddondat`');
        $cot = $DB->fetch_array();
        $iddondat = $cot['iddondat'];
        // b2 thêm vào chi tiết đơn đặt với id vừa lấy
        foreach($_SESSION['giohang'] as $value)
        {
            $giohang['idsanpham'] = $value['masanpham'];
            $giohang['soluong'] = $value['soluong'];
            $giohang['iddonhangsanpham']=$iddondat;

            $DB->reset();
            $DB->setTable('chitietdondat');
            $DB->insert($giohang);
           

        }

        unset($_SESSION['giohang']);
        echo '<script>
                alert("Đặt hàng thành công.Chúng tôi sẽ giao hàng cho bạn sớm nhất");
                location.replace("index.php");
            </script>';
        
    }
?>
<div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
    <?php
        include 'template/layout/menu.php';
    ?>
</div>
<div class="container">
    <div id="divgiohang">
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
            <tbody>
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
                                <select style=" height: 34px;font-size: 16px;" id="soluongdat" onchange = "suaGioHang(<?php echo $value['masanpham'];?>,$(this).val())">
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
                            if(isset($_SESSION['dangnhap']))
                            {
                            
                                $DB->reset();
                                $DB->setTable('thanhvien');
                                $DB->setWhere('email',$_SESSION['dangnhap']['email']);
                                $DB->select();
                               
                                $cot = $DB->fetch_array();
                                $hovaten = $cot['hoten'];
                                $diachi =$cot['diachi'];
                                $sodienthoai = $cot['sodienthoai'];
                                $email = $cot['email'];
                                $ghichu = $cot['ghichu'];
                                
                                
                                
                                
                                
                                $thanhtoan ='<span>Thanh Toán:'.$tongsp.' sản phẩm  - Tổng tiền:'.number_format($tongtienGH).'VNĐ</span><br/>';
                               
                               
                            }
                            else
                            {
                                $hovaten = '';
                                $diachi ='';
                                $sodienthoai = '';
                                $email = '';
                                $ghichu = '';
                            }
                        ?>
                        <form action="" method = "POST">
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" value="<?php echo $hovaten;?>" name="hoten" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ :</label>
                                <input type="text" name="noigiao" value="<?php echo $diachi;?>" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện Thoại:</label>
                                <input type="text" name="sodienthoai" required value="<?php echo $sodienthoai;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" required  value="<?php echo $email;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ghi chú</label>
                                <textarea name="ghichu"  class="form-control" id="" cols="30" rows="5"><?php echo $ghichu;?></textarea>
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
    </div>
  
</div>



<?php
 
    include 'template/layout/footer.php';
?>