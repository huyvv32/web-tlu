<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];

	
	switch($idloaitaikhoan)
	{
		case 1:
			
		
		
			break;
		
		default:
			echo '<script>
			alert("Bạn chưa được cấp quyền.Mời bạn đăng nhập lại tài khoản");
			location.replace("dangnhap.php");
			</script>';
		
		
	}
}
else{
	
	header('location:dangnhap.php');
}
	include 'layout/header.php';

	
?>
<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <h2>Dịch vụ</h2><hr>
			<form class="form-inline" action="/action_page.php">
  <div class="form-group">
    <label for="email">Ngày bắt đầu:</label>
    <input type="date" class="form-control" id="ngaybatdau">
  </div>
  <div class="form-group">
    <label for="pwd">ngày kết thúcc:</label>
    <input type="date" class="form-control" id="ngayketthuc">
  </div>
  <div class="radio">
 
  <label><input type="radio" name="trangthai" value="3"> Công ty hủy</label>
    <label><input type="radio" name="trangthai" value="4" > Nhân viên hủy</label>
    
    <label><input type="radio" name="trangthai" value="5" > Đã xong</label>
  </div>
  <button type="button" onclick="timDV()" id="timdv" class="btn btn-default">Tìm</button>
</form>
		</div>
        <br>
        <br>
        <div id="kqtk">
          
        </div>
        </div>
        <script>
         function timDV()
            {
                 // Khai báo tham số
                 var trangthai= document.getElementsByName('trangthai');
                 var daySstart= document.getElementById("ngaybatdau").value;
                 var dayEnd= document.getElementById("ngayketthuc").value;
                
                 var result='';
                // Lặp qua từng checkbox để lấy giá trị
                for (var i = 0; i < trangthai.length; i++){
                    if (trangthai[i].checked === true){
                        result =trangthai[i].value;
                        break;
                    }
                }
                 alert(result);
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/timkiemngaydat.php",
                         data: { starDay: daySstart,
                         endDay:dayEnd,
                         tt:result
                         
                         
                         },
                         success: function(result){
                            $("#kqtk").html(result);
            }});
            
	            
            }
        </script>
<?php
	include 'layout/footer.php';
?>