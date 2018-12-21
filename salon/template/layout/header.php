<?php
	session_start();
	include 'libraries/config.php';
	include 'libraries/class.database.php';
	include 'libraries/file_requick.php';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if(isset($_GET['thoat']))
	{
		unset($_SESSION['dangnhap']);
	}
?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>	
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" media="all">
		<link rel="stylesheet" href="css/main.css">
		