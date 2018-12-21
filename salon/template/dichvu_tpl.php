<?php
	$DB->reset();
	$DB->setTable('dichvu');
	$DB->setOrder("iddichvu desc");
	$DB->select('`iddichvu`, `tendichvu`');
	$itemDichvu = '';
	while($cot = $DB->fetch_array())
	{	$trangthai = ($cot['trangthai']==1)? '<span class="label label-danger">new</span>':"";
		
		
		$itemDichvu .= '<li><a href="chitietdichvu.php?idDichvu='.$cot['iddichvu'].'">'.$cot['tendichvu'].'  '.$trangthai.' </a></li>';
	}	
?>
<div class="modal video-modal fade" id="mydichvu" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
			
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<h1 class="text-center">Dich Vụ</h1>
						<hr/>
						<ol>
							<?php
								echo $itemDichvu;
							?>
						</ol>
						<hr/>
					</div>
			</div>
		</div>
	</div>