<?php
    include 'template/layout/header.php';
    if(isset($_POST['datdv']))
    {
        $arrDDV['iddichvu'] = $_POST['iddichvu'];
        $arrDDV['tendichvu'] = $_POST['tendichvu'];
        $arrDDV['thanhvien'] = $_POST['hovaten'];
        $arrDDV['tennhanvien'] = '';
        $arrDDV['diachi'] = $_POST['diachi'];
        $arrDDV['ghichu'] = $_POST['ghichu'];
        $arrDDV['tien'] = $_POST['giadv'];
        $arrDDV['thoigianlam'] = $_POST['thoigianlam'];
        $arrDDV['thoiluong'] = $_POST['thoiluong'];
        $arrDDV['sodienthoai'] = $_POST['sodienthoai'];
        $arrDDV['email'] = $_POST['email'];
        $arrDDV['ngaylam'] = $_POST['ngaylam'];
        $arrDDV['idtrangthai'] = 1;
        $arrDDV['ngaytao'] = date('Y-m-d');
        
       if(strtotime($arrDDV['ngaylam'])< strtotime($arrDDV['ngaytao']))
       {
            echo '<script>
                    alert("Ngày làm không hợp lệ mời bạn đặt lại!");
                  </script>';
            if(!isset($_SESSION['dangnhap']))
            {
                $tenthanhvien =  $arrDDV['thanhvien'];
                $diachi = $arrDDV['diachi'] ;
                $sodienthoai=$arrDDV['sodienthoai'];
                $email = $arrDDV['email'] ;
                $ghichu = $arrDDV['ghichu'];
                $thoigianlam = $arrDDV['thoigianlam'];
            }
            else
            {
                $thoigianlam = $arrDDV['thoigianlam'];
                $ghichu = $arrDDV['ghichu'];
            }
       }
       else
       {
        $DB ->reset();
        $DB->setTable('dondatdichvu');
            if($DB->insert($arrDDV))
            {
                echo '<script>
                        alert("Cám ơn bạn đã đặt dịch vụ. Chúng tôi sẽ liên lạc với bạn");
                        location.replace("index.php");
                </script>';

            }
       }
    }
?>
<title>Chi tiết dịch vụ</title>
	</head>
<body>
						
 <div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
        <?php
              include 'template/layout/menu.php';
              $DB->reset();
              $noidung='';
              if(isset($_GET['iddichvu']))
              {
                
                  $DB->setTable('dichvu');
                  $DB->setWhere('iddichvu',$_GET['iddichvu']);
                  $DB->select();
                  if($DB->num_rows()==1)
                  {
                    
                      $cot=$DB->fetch_array();
                      $tendichvu = $cot['tendichvu'];
                      $iddichvu = $cot['iddichvu'];
                   
                      $noidung = $cot['noidung'];
                      $thoiluong = $cot['thoiluong'];
                      $gia = $cot['gia'];
                      
                  }else
                  {
                      echo 'id khong ton tai';
                  }
                  
              }
        ?>
    </div>
    <div class="container">
	    <div class="row">
		    <div id="primary" class="col-lg-8 col-md-8 content-area content-page-1">
				<main id="main" class="site-main" role="main">
					<article id="post-61497" class="post-61497 page type-page status-publish has-post-thumbnail hentry">
	                    <header class="entry-header">
                            <h1 class="entry-title"><?php echo $cot['tendichvu'];?></h1>
                            <p> Chi phí thực hiện: <strong><?php echo  number_format($gia,0,",",",");?> VNĐ</strong> - Thời gian thực hiện: <strong><?php echo $thoiluong;?> phút/lần</strong> - <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#datdichvu">Đặt dịch vụ</a></p>
                            <hr>
                        </header>
                        <div class="entry-content">
                            <?php
                                echo $noidung;
                            ?>
                        </div>
                        <footer class="entry-footer">

                        </footer>
                    </article>
				</main>
		    </div>
		   
	    </div>
    </div>
           

    <div class="modal video-modal fade" id="datdichvu" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body">
                    <h3 class="text-center">Đặt dịch vụ</h3>
                    <hr>
                    <div class="fromdatdichvu" style="padding:23px">
                        <span>Tên dịch vụ:<strong><?php echo $tendichvu;?></strong> - Giá : <strong><?php echo  number_format($gia,0,",",",");?> VNĐ</strong> -Thời gian thực hiện :<strong><?php echo $thoiluong;?> phút/lần</strong></span>
                            
                           
                            <hr>
                        <?php
                            if(!isset($_SESSION['dangnhap']))
                            {
                               
                                echo '<span style="color:red">(*) Đăng nhập tài khoản để nhận được ưu đãi</span>. <hr>';
                            }
                            else
                            {
                                
                                $DB->reset();
                                $DB->setTable('thanhvien');
                                $DB->setWhere('email',$_SESSION['dangnhap']['email']);
                                $DB->select();
                                $cot = $DB->fetch_array();

                                $tenthanhvien = $cot['hoten'];
                                $diachi = $cot['diachi'];
                                $sodienthoai = $cot['sodienthoai'];
                                $email = $cot['email'];
                               
                                

                                $DB->reset();
                                $DB->setTable('loaithanhvien');
                                $DB->setWhere('idloaithanhvien',$cot['idloaithanhvien']);
                                $DB->select();
                                $cot  = $DB->fetch_array();
                                $gia =$gia - (($gia * $cot['phantramuudai'])/100);
                                echo '<span>Bạn là thành viên <strong>'.$cot['tenloaithanhvien'].'</strong> được khuyến mại <strong>'.$cot['phantramuudai'].' % </strong>- Bạn phải trả: <strong>'.number_format($gia,0,",",",").' VNĐ</strong></span><hr/>';
                            }
                        ?>
                        
                        <form action="<?php echo $_SERVER[REQUEST_URI];?>" method="POST">
                             <input type="hidden" value="<?php echo $iddichvu;?>" name="iddichvu" class="form-control">
                            <input type="hidden" value="<?php echo $tendichvu;?>" name="tendichvu" class="form-control">
                            <input type="hidden" value="<?php echo $gia;?>" name="giadv" class="form-control">
                            <input type="hidden" value="<?php echo $thoiluong;?>" name="thoiluong" class="form-control">
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" value="<?php echo $tenthanhvien;?>" required name="hovaten" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ:</label>
                                <input type="text" value="<?php echo $diachi;?>" required name="diachi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện Thoại:</label>
                                <input type="text" value="<?php echo $sodienthoai;?>" required name="sodienthoai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" value="<?php echo $email;?>" required name="email" class="form-control">
                            </div>
                            
                            <div class="from-group">
                            <fieldset>
                                <legend>Chọn ngày và thời gian bạn muốn làm</legend>

                            <div class="form-group">
                                <label for="start">Ngày</label>
                                <input type="date" name="ngaylam" required class="form-control"/>
                               
                            </div>
                            <div class="form-group">
                                <label for="start">Thời gian</label>
                                <input type="time" value="<?php echo $thoigianlam;?>" required name="thoigianlam" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="">Ghi chú</label>
                                <input name="ghichu" value="<?php echo $ghichu;?>" class="form-control"/>
                            </div>
                            </fieldset>

                            </div>
                            <div class="from-group text-center">
                                <input href="#" type="submit" value="Đặt lịch" id="datdv" name="datdv" class="btn btn-primary">
                            </div>
                        </form>

                            </div>
                            
					</div>
			</div>
		</div>
	</div>
   
<?php
    include 'template/layout/footer.php';
?>