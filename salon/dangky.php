<?php
	include 'template/layout/header_dangky.php';
	include 'plugins/captcha/function-captcha.php';
?>
<?php
		$register['hoten'] = $_POST['name'];
		$register['email'] =strtolower( $_POST['email']);
		$register['matkhau'] = $_POST['password'];
		$confirmPassword = $_POST['confirmpassword'];

		
if(!empty($_POST))
{
    if($_SESSION['captcha_string']==$_POST["captcha"])
    {
		if(isset($_POST['dangky']))
		{
			
			if($confirmPassword==$register['matkhau'])
			{
				//  kiểm tra email
				$DB->reset();
				$DB->setTable('thanhvien');
				$DB->setWhere('email',$register['email']);
				$DB->select('idthanhvien');
				
				if($DB->num_rows()>0)
				{
					$register['email']="";
					echo '<script>
							alert("Email đã tồn tại");
						
						</script>';
				}else
				{
					if($_FILES['anh']['type']=='image/jpeg'||$_FILES['anh']['type']=='image/png')
		{
			move_uploaded_file($_FILES['anh']['tmp_name'],'./images/khachhang/'.$_FILES['anh']['name']);
			
			$register['anh'] = $_FILES['anh']['name'];
			$register['ngaytao'] = date('Y-m-d H:i:s');
					
					$register['matkhau'] = md5($register['matkhau']);
					$register['idloaithanhvien'] = 1;
					 $DB->reset();
					$DB->setTable('thanhvien');
					if($DB->insert($register))
					{
						echo '<script>
							alert("Đăng ký thành công");
							location.replace("dangnhap.php");
						</script>';
					}
			
			
		

		}
		else{
		
			echo '<script>
				alert("File Không hợp lệ");
			</script>';
		}
	}
					
				
			}
			else
			{
				$confirmPassword="";
				echo '<script>
							alert("Mật khẩu không khớp");
							
						</script>';
			}
			
		}
    }
    else
    {
        echo '<script>
							alert("Mã xác thực không đúng");
						
						</script>';
    }
   

}
unset($_SESSION['captcha_string']);
create_image();

?>

<title>Đăng ký</title>
<body>
<div class="header">
	<h1>Anger Spa Form</h1>
</div>
<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom main-agile book-form">
		<div class="alert-close"> </div>
		<h2 class="tittle">Đăng ký </h2>
		<form action="#" method="post" enctype="multipart/form-data">
			<div class="form-date-w3-agileits">
				<label> Họ và tên </label>
				<input type="text" name="name" value="<?php echo $register['hoten'];?>" placeholder="Tên của bạn" required="">
				<label> Email </label>
				<input type="email" name="email" value="<?php echo $register['email'];?>" placeholder="Email" required="">
				<label> Mật khẩu </label>
				<input type="password" name="password" value="<?php echo $register['matkhau'];?>" placeholder="Mật khẩu" required="">
				<label> Nhập lại mật khẩu </label>
				<input type="password" name="confirmpassword" id="confirmpassword" value="<?php echo $confirmPassword;?>" placeholder="Nhập lại mật khẩu" required="">
				
									<label for="focusedinput" class="col-sm-2 control-label">Ảnh</label>
									<div class="col-sm-8">
                                    <input type="file" name="anh" required id="exampleInputFile">
									</div>
									<div class="col-sm-2">
										
									</div>
								<br>
				<label> Mã xác thực</label>
				<img src="captcha_image.png">

<br/><a href="<?php echo $_SERVER['PHP_SELF'];?>">Not readable? Change text.</a><br/><br/>


<input type="text" name="captcha" id="captcha-form" autocomplete="off" required /><br/>
			</div>
			<div class="make wow shake">
				  <input type="submit" name="dangky" value="Đăng ký">
			</div>
		</form>
	</div>
	<!-- //Main -->
</div>
<!-- footer -->

<?php
	
	include 'template/layout/footer_dangky.php';
?>