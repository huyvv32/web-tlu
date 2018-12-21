<?php
    include 'template/layout/header.php';
  
?>
<title>Chi tiết tin tức</title>
	</head>
<body>
						
 <div class="menu" style="    background: url(images/1.jpg) no-repeat;background-size:cover">
        <?php
              include 'template/layout/menu.php';
              $DB->reset();
              $noidung='';
              if(isset($_GET['idtintuc']))
              {
                
                  $DB->setTable('tintuc');
                  $DB->setWhere('idtintuc',$_GET['idtintuc']);
                  $DB->select();
                  if($DB->num_rows()==1)
                  {
                    
                      $cot=$DB->fetch_array();
                      $tieude = $cot['tieude'];
                     
                   
                      $noidung = $cot['noidung'];
                  
                  }else
                  {
                      echo '<script>location.replace("404.html");</script>';
                  }
                  
              }
        ?>
    </div>
    <div class="container">
	    <div class="row">
		    <div id="primary" class="col-lg-8 col-md-8 content-area content-page-1">
				<main id="main" class="site-main" role="main">
					<article id="post-61497" class="post-61497 page type-page status-publish has-post-thumbnail hentry">
	                    <header class="entry-header">
                            <h1 class="entry-title"><?php echo $cot['tieude'];?></h1>
                            
                            <hr>
                        </header>
                        <div class="entry-content">
                            <?php
                                echo $noidung;
                            ?>
                        </div>
                        <footer class="entry-footer">

                        </footer>
                    </article>
				</main>
		    </div>
		   
	    </div>
    </div>
           

	
<?php
    include 'template/layout/footer.php';
?>