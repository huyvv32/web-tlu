<?php
    session_start();
    unset($_SESSION['giohang']);
    echo 	'<a href="giohang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <span>0 VND</span> (<span>0</span> SP)</a>';
    echo '<script>$("#divgiohang").html("<h1>Không có sản phẩm nào trong giỏ hàng</h1>");</script>';
?>