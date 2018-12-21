<?php
	$DB->reset();
	$DB->setTable('thongtin');
	
	$DB->select();

	$cot = $DB->fetch_array();
?>
<div class="contactaddress" id="contact">
	<h3 class="wthree_head">Liên hệ - Trụ Sở Chính</h3>
	<div class="col-md-3 addressgrid1">
		<div class="col-md-2 addricon">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</div>
		<div class="col-md-10 addrinfo">
			<h4>Email : </h4>
			<h5><a href="mailto:<?php echo $cot['email']?>"><?php echo $cot['email'];?></a></h5>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-3 addressgrid1">
		<div class="col-md-2 addricon">
			<i class="fa fa-skype" aria-hidden="true"></i>
		</div>
		<div class="col-md-10 addrinfo">
			<h4>Skype : </h4>
			<h5><a href="#">SkypeID:<?php echo $cot['sky'];?></a></h5>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-3 addressgrid1">
		<div class="col-md-2 addricon">
			<i class="fa fa-phone" aria-hidden="true"></i>
		</div>
		<div class="col-md-10 addrinfo">
			<h4>Hotline : </h4>
			<h5><?php echo $cot['sodienthoai'];?></h5>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-3 addressgrid1">
		<div class="col-md-2 addricon">
			<i class="fa fa-map-marker" aria-hidden="true"></i>
		</div>
		<div class="col-md-10 addrinfo">
			<h4>Địa chỉ : </h4>
			<h5><?php echo $cot['diachi'];?></h5>
		</div>
		<div class="clearfix"></div>
	</div>
		<div class="clearfix"></div>
</div>