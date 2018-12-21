<?php
		include 'template/dichvu_tpl.php';
		$DB->reset();
		$DB->setTable('thongtin');
		$DB->select();
		while($cot= $DB->fetch_array())
		{
			$itemTT = '
			<li><i class="fa fa-map-marker"></i> '.$cot['diachi'].'</li>
<li><i class="fa fa-phone"></i> '.$cot['sodienthoai'].'</li>
<li><i class="fa fa-hours"></i>Ngày làm:  '.$cot['ngaylamviec'].'</li>
<li><i class="fa fa-hours"></i>Thời gian làm: '.$cot['thoigianlamviec'].'</li>
<li><i class="fa fa-facebook"></i>  '.$cot['fb'].'</li>
<li><i class="fa fa-envelope"></i>  '.$cot['email'].'</li>
<li><i class="fa fa-internet-explorer">  </i> '.$cot['web'].'</li>
			';
		}

	?>
<div id="ketquagiohang"></div>
<!-- copyright -->
<footer>
	<div class="container-fluid" style="color:white;background:url('images/bg-footer.png')">
		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<h2>Anger Spa</h2>
			<span>Thiên đường làm đẹp của bạn</span>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<h3>Địa chỉ</h3>
			<hr>
			<ul style="list-style-type:none">
<?php
	echo $itemTT;
?>
</ul>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<h3>Bản đồ</h3>
			<hr>
			<?php
				include "template/googlemap.php";
			?>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<h3>Liên hệ</h3>
		<hr>
		<?php
				include "template/formlienhe.php";
			?>
		</div>
		
	</div>
</footer>


<!-- //copyright -->
	<?php
		include 'template/coso_tpl.php';
	?>
<div class="modal video-modal fade" id="cacdichvukhac" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div id="ketqua">
			hello
			</div>
		</div>
	</div>
	<?php
		$DB->reset();
		$DB->setTable('gioithieu');
		$DB->select();
		$cot = $DB-> fetch_array();
		$itemGT = $cot['noidung'];
	?>
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Anger Spa
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<?php
							echo $itemGT;
						?>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<?php
		$DB->reset();
		$DB->setTable('daotao');
		$DB->select();
		$cot = $DB-> fetch_array();
		$itemDaoTao = $cot['src'];
	?>
<div class="modal video-modal fade" id="myModalDaoTao" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
			
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
							<?php
								echo $itemDaoTao;
							?>
					</div>
			</div>
		</div>
	</div>
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/simpleCart.min.js"></script>
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->
<script>
function themGioHang(masp,sl)
{

	$.ajax({
                        method: "POST",
                        url: "./ajax/themgiohang.php",
                         data: { masanpham: masp, soluong: sl },
                         success: function(result){
                            $("#contentGH").html(result);
            }});
}
function suaGioHang(masp,sl)
{

	$.ajax({
                        method: "POST",
                        url: "./ajax/suagiohang.php",
                         data: { masanpham: masp, soluong: sl },
                         success: function(result){
                            $("#divgiohang").html(result);
            }});
}
function xoaGioHang(masp)
{

	$.ajax({
                        method: "POST",
                        url: "./ajax/xoagiohang.php",
                         data: { masanpham: masp},
                         success: function(result){
                            $("#divgiohang").html(result);
            }});
}
function lamMoiGioHang()
{

	$.ajax({
                        method: "POST",
                        url: "./ajax/lammoigiohang.php",
                         success: function(result){
                            $("#contentGH").html(result);
            }});
}
</script>
<!-- For Gallery js files -->
<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //For Gallery js files -->
	
<!-- //here starts scrolling icon -->
<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->

<!-- typer js--><!-- For banner text -->
<script src='js/jquery.typer.js'></script>
	<script>
						var win = $(window),
							foo = $('#typer');

						foo.typer(['Chào mừng bạn đến với Anger spa']);

						// unneeded...
						win.resize(function(){
							var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

							foo.css({
								fontSize: fontSize * .8 + 'px'
							});
						}).resize();
					</script>
<!-- //typer js--><!-- //For banner text -->
<script>
	function loaiTinTuc(pagett=1,idltt)
            {
              
               $.ajax({
                        method: "GET",
                        url: "./ajax/loaitintuc.php",
                        data: {page:pagett,
                        idloaitintuc:idltt
                        },
                         success: function(result){
                            $("#kqtt").html(result);
            }});
	            
			}
			function loaiDichVu(pagedv=1,idldv)
            {
              
               $.ajax({
                        method: "GET",
                        url: "./ajax/loaidichvu.php",
                        data: {page:pagedv,
                        idloaidichvu:idldv
                        },
                         success: function(result){
                            $("#kqdv").html(result);
            }});
	            
			}
			function loaiSanPham(pagedv=1,idlsp)
            {
              
               $.ajax({
                        method: "GET",
                        url: "./ajax/loaisanpham.php",
                        data: {page:pagedv,
                        idloaisanpham:idlsp
                        },
                         success: function(result){
                            $("#kqsp").html(result);
            }});
	            
			}
			function timKiemSanPham()
            {
				var strTimKiem = $("#txtTimKiem").val(); 
				
				$.ajax({
                        method: "GET",
                        url: "./ajax/timkiemsanpham.php",
                        data: {
                        tuTimKiem:strTimKiem
                        },
                         success: function(result){
							$("#txtTimKiem").val('');
							$("#kqsp").html(result);
							
            }});
			}
			function timKiemDichVu()
            {
				var strTimKiem = $("#txtTimKiemDV").val(); 
				
				$.ajax({
                        method: "GET",
                        url: "./ajax/timkiemdichvu.php",
                        data: {
                        tuTimKiem:strTimKiem
                        },
                         success: function(result){
							$("#txtTimKiemDV").val('');
							$("#kqdv").html(result);
							
            }});
			}
			
			
</script>
</body>
</html>