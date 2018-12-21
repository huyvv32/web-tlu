<?php
    include 'template/layout/header.php';
    // lấy danh sách loại dịch vụ
    $DB->reset();
    $DB->setTable("loaidichvu");
    $DB->select();
    if($DB->num_rows()>0)
    {
        $lstLoaiDichVu = '';
        while($cot= $DB->fetch_array())
        {
            $lstLoaiDichVu .= '<a href="#" onclick="loaiDichVu(1,'.$cot['idloaidichvu'].')" class="list-group-item">'.$cot['tenloaidichvu'].'</a>';
        }
    }
    // lấy danh sách dịch vụ
    $DB -> reset();
	$DB -> setTable('dichvu');
	$DB	-> setOrder('iddichvu DESC');
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$link = $_SERVER['PHP_SELF'];
	$query = $DB->phantrang($currentPage,10,9,$link,$link.'?page={page}');
    $itemDV = '';
    
    if($DB->num_rows()>0)
    {
        while($cot = $DB->fetch_array($query))
        {
            $itemDV .=' <div class="article" style="margin-bottom:30px;margin-top:10px">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img  hidden-xs" src="images/anhdichvu/'.$cot['anh'].'" onerror="this.src=\'images/anhtintuc/error.png\'" alt="Lorem ipsum dolor sit amet">
                                </div>
                                <div class="col-sm-9">
                                    <h3><a href="chitietdichvu.php?iddichvu='.$cot['iddichvu'].'">'.$cot['tendichvu'].'</a></h3>
                                    <p>'.$cot['mota'].'</p>
        
                                </div>
                            </div>
                        </div> ';
        }
    }else
    {
        $itemDV = "<h1>Không có dịch vụ nào</h1>";
    }
	
?>
 <div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
        <?php
              include 'template/layout/menu.php';

        ?>
    </div>

    
      
 
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="kqdv">
                        <?php
                            echo $itemDV;
                            ?>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
              <?php
               echo $DB->html();
              ?>
                 
              </div>
                </div>
              
              
              
             
            </div>
            <div class="col-sm-4" style="padding-top:23px">
                <div>
                    <form action="#" >
                        <div class="form-group">
                            <span class="input-group">
                                <input type="text" id="txtTimKiemDV" placeholder="Tìm kiếm tên dịch vụ" class="form-control">
                                <span class="input-group-btn">
                                    <button onclick="timKiemDichVu()" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </span>
                        </div>
                    </form>
                </div>
                <div>
                 
                  <div class="list-group">
                  <a href="danhsachdichvu.php" class="list-group-item active">
                  Dịch vụ
  </a>
                   <?php
                        echo $lstLoaiDichVu;
                   ?>
                  </div>
                </div>
               
            </div>
        </div>
    </div>
    
<?php
 
    include 'template/layout/footer.php';
?>