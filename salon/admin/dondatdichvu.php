<?php
session_start();
if(isset($_SESSION['taikhoan']))
{
	
	$idloaitaikhoan =(int)$_SESSION['taikhoan']['idloaitaikhoan'];
	switch($idloaitaikhoan)
	{
		case 1:	
		case 2:
		case 3:	
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
	// lay danh sách dịch vụ có trang thái 1 (Tiếp nhận dịch vụ)
	$DB -> reset();
	$DB -> setTable('dondatdichvu');
	$DB->setWhere('idtrangthai',1);
	$DB	-> setOrder('iddondat DESC');

	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link ='dondatdichvu.php';
	$DB->phantrang($currentPage,5,9,$link,$link.'?page={page}');
	$tennhanvien='';
	$itemDDV = '';
	while($cot = $DB->fetch_array($query))
	{
		// danh sách trạng thái 
		$itemTrangThai='<select id="trangthaidv" onchange="ChangeTrangThai('.$cot['iddondat'].')">';
		$itemTrangThai .= '<option value="1" selected>Đã tiếp nhận đơn hàng</option>';
		$itemTrangThai .= '<option value="2" disabled>Đã xử lý</option>';
		$itemTrangThai .= '<option value="3" disabled>Đang làm</option>';
		$itemTrangThai .= '<option value="4" >Khách hàng hủy</option>';
		$itemTrangThai .= '<option value="5" >Công ty hủy</option>';
		$itemTrangThai .= '<option value="6" disabled>Đã xong</option>';
		$itemTrangThai .='</select>';
		// 3 nut xem , sửa xóa
		$xuly = '<a href="xulydondat.php?iddondatdichvu='.$cot['iddondat'].'&iddichvu='.$cot['iddichvu'].'" class="btn btn-primary">Xử lý</a>';
		$chinhsua = '<a href="suadondatdichvu.php?iddondatdv='.$cot['iddondat'].'"style="margin-right: 12px;" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>';
		$xoa='<button onclick="xoaDonDatDichVu('.$cot['iddondat'].','.$_GET['page'].')" href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
		
		$itemDDV .='<tr>
						<td style="  text-align: center;  vertical-align: middle;">'.$cot['iddondat'].'</td>
						<td>'.$cot['tendichvu'].'</td>
						<td>'.$cot['thanhvien'].'</td>
						<td style="text-align: center;">'.$tennhanvien.'</td>
                        <td style="text-align: center;">'.$xuly.'</td>
						<td style="text-align: center;">'.$itemTrangThai.'</td>
                        <td style="text-align: center;"><buton onclick="moreDV('.$cot['iddondat'].')" class="btn btn-primary" data-toggle="modal" data-target="#chitietdondatdv" ><i class="fa fa-eye"></i></button></td>
						<td class="text-center">'.$chinhsua.$xoa.'</td>
					</tr>
				';
	}	
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h2 class="title1">Đơn đặt dịch vụ</h2>
			<form class="form-horizontal">
				<div class="form-group">
					<label class="col-md-2 control-label"></label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon"><i class="fa fa-users"></i></span>
							<input type="text" id="tkdondatdichvu" class="form-control1" placeholder="Tìm kiếm khách hàng đặt dịch vụ">
						</div>
					</div>
				</div>
								
			</form>
			<div class="table-responsive bs-example widget-shadow">
				<h4><a href="themdondatdichvu.php" class="btn btn-primary">Thêm đơn đăt </a> |
				
					<a href="dondatdichvu.php" class="btn btn-primary">Tiếp nhận đơn đặt</a> |
					<button onclick="daXuLyDichVu()" class="btn btn-primary">Đã xử lý</button> |
					<button onclick="dangLamDichVu()"  class="btn btn-primary">Đang làm</button> | 
					<button onclick="khachHangHuyDichVu()" class="btn btn-primary">Khách hàng hủy</button> | 
					<button onclick="congTyHuyDichVu()" class="btn btn-primary">Công ty hủy</button> | 
					<button onclick="daXongDichVu()"  class="btn btn-primary">Đã xong</button>
					
				</h4>
				<div id="kqddv">
					<table class="table table-bordered"> 
						<thead> 
							<tr>
								<th style="text-align:center">ID</th>
								<th style="    text-align: center;">dịch vụ</th>
                                <th style="    text-align: center;">Khách hàng</th>
                                <th style="    text-align: center;">Nhân viên</th>
                                <th style="    text-align: center;">Xử lý</th>
                                <th style="    text-align: center;">Trạng thái</th>
                                <th style="    text-align: center;">Xem thêm</th>
								<th style="width:127px;text-align:center">Sửa | Xóa</th>
							</tr>
						</thead> 
						<tbody> 
							<?php
							 echo $itemDDV;
							?>
						</tbody> 
						<tfoot>
							<tr>
								<td colspan="9">
									<?php 
										echo $DB->html();
									?>
								</td>
							</tr>
						</tfoot>
					</table> 
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="chitietdondatdv" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content" id="contenModaldichvu"></div>
      </div>
  	</div>
<script>
	  function moreDV(iddd)
	  {
				$.ajax({
                        method: "GET",
                        url: "./ajax/chitietdondatdichvu.php",
                         data: { iddondat: iddd},
                         success: function(result){
                            $("#contenModaldichvu").html(result);
            			}});
	  }
	  function xoaDonDatDichVu(iddichvu,linksrc=1)
            {
               var r = confirm("Bạn có muốn xóa không!");
               if (r == true) {
                $("#tkdondatdichvu").val("");
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoadondatdichvu.php",
                         data: { iddv: iddichvu,page:linksrc},
                         success: function(result){
                            $("#kqddv").html(result);
            				}});
								}
              
            }
		  
	</script>	
<?php
	include 'layout/footer.php';
?>