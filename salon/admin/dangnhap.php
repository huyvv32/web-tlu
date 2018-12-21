<?php
    include '../libraries/config.php';
    include '../libraries/class.database.php';
    include '../libraries/file_requick.php';
    session_start();
    if(isset($_POST['btndangnhap']))
    {
        $email=$_POST['email'];
        $matkhau = $_POST['matkhau'];

        $DB->reset();
        $DB->setTable('taikhoan');
        $DB->setWhere('email',$email);
        $DB->setWhere('matkhau',$matkhau);
        $DB->select();
    
        if($DB->num_rows()==1)
        {
            $cot=$DB->fetch_array();
            $arrTaiKhoan['taikhoan']['anh']=$cot['anh'];
            $arrTaiKhoan['taikhoan']['idloaitaikhoan']=$cot['idloaitaikhoan'];
            $arrTaiKhoan['taikhoan']['tentaikhoan']=$cot['hoten'];
            $_SESSION['taikhoan']=$arrTaiKhoan['taikhoan'];
            echo '<script>
                alert("Đăng nhập thành công");
                
            </script>';
            header('location:dieuhuong.php');
        }
        else
        {
            echo '<script>
                alert("Email hoặc mật khẩu không đúng");
               
            </script>';
         
        }


        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Login Form a Responsive Widget Template :: w3layouts</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css1/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css1/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1>Angel spa Login Form</h1>
    <div class=" w3l-login-form">
        <h2>Đăng nhập</h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" class="form-control" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mật khẩu:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="matkhau" class="form-control" placeholder="Password" required="required" />
                </div>
            </div>
            
            <button type="submit" name="btndangnhap">Đăng nhập</button>
        </form>
        
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </footer>

</body>

</html>