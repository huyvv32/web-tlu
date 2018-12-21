<?php
    $DB->reset();
    $DB->setTable('thongtin');
    $DB->select();
    $diachi='';
    $i=1;
    while($cot = $DB->fetch_array())
    {
       
        $diachi.= '<h2>Cơ sở '.$i.':
        <p><strong>'.$cot['diachi'].'</strong><br> - Số điện thoai:<strong>'.$cot['sodienthoai'].' 
        </strong><br>- Email:<strong>'.$cot['email'].'</strong> <br>- Facebook:<strong>'.$cot['fb'].'</strong> <br>- Giờ làm việc:<strong> '.$cot['thoigianlamviec'].'</strong><br>- Ngày làm việc:<strong> '.$cot['ngaylamviec'].'</strong></p></h2>';
        $i++;
    }
?>
<div class="modal video-modal fade" id="coso" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Danh sách cơ sở
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
                        <?php
                        echo $diachi;
                        ?>
						
					</div>
			</div>
		</div>
	</div>