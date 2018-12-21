
<?php
	include 'template/layout/header_dangky.php';
?>
<?php
	if(isset($_POST['dangnhap']))
	{
		$email = $_POST['email'];
		$MatKhau = $_POST['password'];

		$DB->reset();
		$DB->setTable('thanhvien');
		$DB->setWhere('email',trim(strtolower($email)));
		$DB->setWhere('matkhau',md5($MatKhau));
		$DB->select();
		

		if($DB->num_rows()==1)
		{
			$cot = $DB->fetch_array();
			$_SESSION['dangnhap']['ten'] =$cot['hoten']; 
			$_SESSION['dangnhap']['email'] = $cot['email'];
			echo '<script>
				location.replace("index.php");		
				</script>';
		}else
		{
			echo '<script>
							alert("Email hoặc mật khẩu không đúng");
						
						</script>';
		}
	}
?>
<title>Đăng nhập</title>
<body>
<div class="header">
	<h1>Anger Spa Form</h1>
</div>
<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom main-agile book-form">
		<div class="alert-close"> </div>
		<h2 class="tittle">Đăng nhập</h2>
		<form action="#" method="post">
			<div class="form-date-w3-agileits">
				<label> Email </label>
				<input type="email" value="<?php echo $email;?>" name="email" placeholder="Email của bạn" required="">
				<label> Password </label>
				<input type="password" name="password" placeholder="Your Password" required="">
				<a href="laylaimatkhau.php">Quên mật khẩu?</a>
			</div>
			<div class="make wow shake">
				  <input type="submit" name="dangnhap" value="Đăng nhập">
			</div>
		</form>
	</div>
	<!-- //Main -->
</div>
<?php
	include 'template/layout/footer_dangky.php';
?>