<?php
	session_start();
	
	

	if(isset($_SESSION['taikhoan']))
	{
		
		$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
		switch($idloaitaikhoan)
		{
			case 1:
				header('location:index.php');
				break;
			case 2:
				header('location:danhsachdichvu.php');
				break;
			case 3:
				header('location:danhsachdichvu.php');
				break;
			case 4:
				header('location:danhsachsanpham.php');
				break;
			case 5:
				header('location:danhsachtuvan.php');
				break;
			case 6:
				header('location:danhsachtintuc.php');
				break;
			
			default:
				echo '<script>
				alert("Bạn chưa được cấp quyền");
				location.replace("dangnhap.php");
				</script>';
			
			
		}
	}
	else{
		
		header('location:dangnhap.php');
	}

