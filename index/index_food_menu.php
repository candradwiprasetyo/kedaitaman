
 <section class="portfolio" id="portfolio">
<div class="container">
   

      <div class="col-md-3">

      <div class="title text-center wow animated fadeInRight"><div class="new_title">Category</div></div>
      
      </div>

      <div class="col-md-9">
        <div class="title text-center wow animated fadeInRight"><div class="new_title">Favourite <strong>Menu</strong></div></div>
      </div>

    <div class="col-md-3">
      <div class="title text-center wow animated fadeInDown">
     
        <div class="portfoliofilter">
          <a href="javascript:void(0)" data-filter="*" class="current" style="outline:none; text-decoration:none">
            <div class="def-btn filterbutton">Semua</div>
          </a>
          <a href="javascript:void(0)" data-filter=".makanan" style="outline:none; text-decoration:none">
            <div class="def-btn filterbutton">Makanan Utama</div>
          </a>
          <a href="javascript:void(0)" data-filter=".minuman" style="outline:none; text-decoration:none">
            <div class="def-btn filterbutton">Minuman Utama</div> 
          </a>
          
          <a href="javascript:void(0)" data-filter=".snack" style="outline:none; text-decoration:none">
            <div class="def-btn filterbutton">Menu Pelengkap</div> 
          </a>
          <a href="javascript:void(0)" data-filter=".snack" style="outline:none; text-decoration:none">
            <div class="def-btn filterbutton">Aneka Jus</div> 
          </a>
          <a href="javascript:void(0)" data-filter=".snack" style="outline:none; text-decoration:none">
            <div class="def-btn filterbutton">Camilan</div> 
          </a>
         
          
         
        </div><!--/.portfoliofilter -->
     
      </div>

    </div>
 <div class="col-md-9">
      
      <div class="title text-center wow animated fadeInLeft">
   
<div class="grid"> <div class="portfoliocontent">
        <?php
                for($i=1;$i<=12;$i++){
          $nama_cat = array(
                '',
                'Soto Kudus',
                'Ayam Bakar',
                'Ayam Kremes',
                'Lentog Jogja',
                'Mie Goreng Jogja',
                'Mie Kuah Jogja',
                'Pecel',
                'Jus Melon',
                'Jus Alpukat',
                'Jus Tomat',
                'Tahu Crispy',
                'Cheese Stick'
                );
          $price_cat = array(
                '',
                '8.000',
                '17.000',
                '17.000',
                '10.000',
                '15.000',
                '15.000',
                '10.000',
                '10.000',
                '10.000',
                '12.000',
                '7.000',
                '13.000'
                );

          $figure_content = "New";
          if($i > 10){
            $kategori = "snack";
            $chart_color = "chart_color3";
            $figure_color = "figure_date_color3";
          }else if($i > 7){
            $kategori = "minuman";
             $chart_color = "chart_color2";
             $figure_color = "figure_date_color2";
          }else{
            $kategori  = "makanan";
             $chart_color = "chart_color1";
             $figure_color = "figure_date_color1";
          }

          if($i > 3){
            $figure_color = "";
            $figure_content = "";
          }
         
        ?>
                
        <figure class="effect-milo <?php echo $kategori ?>">
        <a  class="fancybox" href="images/menu/<?= $i ?>.jpg" data-fancybox-group="gallery"  title="<?= $nama_cat[$i] ?>"><img src="images/menu/<?= $i ?>.jpg" alt="img<?= $i ?>"/>
          <figcaption>
            
                        <div class="portofolio_putih">
                        <div class="portofolio_price"><span class="portofolio_rp">Rp</span> <?= $price_cat[$i] ?><br /></div>
                        <div class="portofolio_putih_kecil"><?= $nama_cat[$i] ?></div> 
                        <div class="portofolio_putih_kecil_kategori"><?= ucfirst($kategori) ?></div>
                       
                        <div class="portofolio_bawah <?= $chart_color?>"></div>
                       
            </div>
                        <span class="figure_date <?= $figure_color ?>"></span>
                        <span class="figure_date_content"><?= $figure_content ?></span>
                        
            <p class="portofolio_icon">
                   
                        </p>
            
          </figcaption>    
            </a>
        </figure>           
                <?php
        }
         ?>
      </div>
        </div>
            </div>



          </div>
        </div>
            </section>
            <div style="clear:both;"></div>