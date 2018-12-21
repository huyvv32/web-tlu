<?php

    if(isset($_POST['lienhe']))
    {
        $lienhe['hoten'] = $_POST['hoten'];
        $lienhe['email'] = $_POST['email'];
        $lienhe['sodienthoai'] = $_POST['sodienthoai'];
        $lienhe['noidung'] = $_POST['noidung'];

     
        if(is_numeric($lienhe['sodienthoai']))
        {
            $DB->reset();
            $DB->setTable('lienhe');
            $lienhe['ngaynhan']=date('Y-m-d H:i:s');
            if($DB->insert($lienhe)){
                echo '<script>
                alert("Gửi thành công.Chúng tôi sẽ sớm phản hồi bạn");
                location.replace("index.php");
            </script>';
            }
           

        }else
        {
            $lienhe['sodienthoai']='';
            echo '<script>alert("Số điện thoại không phải là số");</script>';
        }
        
    }
    else
    {
        $lienhe['hoten'] = '';
        $lienhe['email'] = '';
        $lienhe['sodienthoai'] = '';
        $lienhe['noidung'] = '';

    }
   
    
?>
<div >

			<form action="#" method="post">
                    <div class="form-group">
                         <input class="form-control" type="text" name="hoten" value="<?php echo  $lienhe['hoten'];?>"  placeholder="Tên của bạn"  required="">
                         <input class="form-control" type="email" name="email" value="<?php echo  $lienhe['email'];?>" placeholder="Email của bạn" required="">
					     <input class="form-control" type="tel" name="sodienthoai" value="<?php echo  $lienhe['sodienthoai'];?>" placeholder="Số điện thoại của bạn" required="">
					     <textarea class="form-control" name="noidung" placeholder="Nôi dung" required><?php echo  $lienhe['noidung'];?></textarea>
                    </div>
					
					
					<input type="submit" name="lienhe" value="Gửi">
				
			</form>
		</div>
		

</div>