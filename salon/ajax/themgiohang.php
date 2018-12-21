<?php
include '../libraries/config.php';
    	include '../libraries/class.database.php';
        
        include '../libraries/file_requick.php';
        session_start();
        
        $DB->reset();
        $DB->setTable('sanpham');
        $DB->setWhere('idsanpham',$_POST['masanpham']);
        $DB->select();

        $cot = $DB->fetch_array();
        if(($cot['giakhuyenmai']>0) && ($cot['giakhuyenmai']<$cot['giaban']))
        {
            $giahientai = $cot['giakhuyenmai'];
        }else
        {
            $giahientai=$cot['giaban'];
        }
        $giohangmoi = array(array("masanpham"=>$cot['idsanpham'],"tensanpham"=>$cot['tensanpham'],"soluong"=>$_POST['soluong'],"dongia"=>$giahientai));
       
        if(isset($_SESSION['giohang']))
        { 
               
           
         
            $kt_masp = false;
            foreach ($_SESSION['giohang'] as $cotGH) {
                
                if($cotGH['masanpham']==$_POST['masanpham'])
                {
                    $soluongdat = $_POST['soluong'] + $cotGH['soluong'];
                    if($soluongdat>5)
                    {
                        $giohangdaco[]=array("masanpham"=>$cotGH['masanpham'],"tensanpham"=>$cotGH['tensanpham'],"soluong"=>$cotGH['soluong'],"dongia"=>$cotGH['dongia']);
                        echo '<script>alert("Bạn có thể chọn tối đa sô lượng là 5 / 1 sản phẩm")</script>';
                    }
                    else
                    {
                        $giohangdaco[]=array("masanpham"=>$cotGH['masanpham'],"tensanpham"=>$cotGH['tensanpham'],"soluong"=>$soluongdat,"dongia"=>$cotGH['dongia']);
                    }
                    $kt_masp = true;
                }
                else
                {
                    $giohangdaco[]=array("masanpham"=>$cotGH['masanpham'],"tensanpham"=>$cotGH['tensanpham'],"soluong"=>$cotGH['soluong'],"dongia"=>$cotGH['dongia']);
                }
            }
            if($kt_masp==false)
            {
                $_SESSION['giohang'] = array_merge($giohangdaco,$giohangmoi);
            }else
            {
                $_SESSION['giohang'] = $giohangdaco;
            }
            
           
        
        }else
        {
            $_SESSION['giohang'] = $giohangmoi;
        }
      
?>
<?php
    $tongtien = 0 ;
    $tongSP = 0;
    foreach($_SESSION['giohang'] as $value)
    {
        $tongtien += $value['soluong']*$value['dongia'];
        $tongSP++;
    }
    echo '<a href="giohang.php"><i class="glyphicon glyphicon-shopping-cart"></i><span>'.number_format($tongtien).'</span> (<span>'.$tongSP.'</span> SP)</a>';
?>
  
