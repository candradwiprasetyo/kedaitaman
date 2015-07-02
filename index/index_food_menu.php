
 <section class="portfolio" id="portfolio">
<div class="container">
   <div class="col-md-10 col-md-offset-1">

      <div class="title text-center wow animated fadeInRight"><div class="new_title">Favourite <strong>Menu</strong></div></div>
      
      <div class="title text-center wow animated fadeInDown">
     
        <div class="portfoliofilter">
          <a href="javascript:void(0)" data-filter="*" class="current" style="outline:none;">
            <div class="def-btn filterbutton">All Categories</div>
          </a>
          <a href="javascript:void(0)" data-filter=".makanan" style="outline:none;">
            <div class="def-btn filterbutton">Makanan</div>
          </a>
          <a href="javascript:void(0)" data-filter=".minuman" style="outline:none;">
            <div class="def-btn filterbutton">Minuman</div> 
          </a>
          
           <a href="javascript:void(0)" data-filter=".snack" style="outline:none;">
            <div class="def-btn filterbutton">Snack</div> 
          </a>
        </div><!--/.portfoliofilter -->
     
      </div>

      
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
                'Wimbi Store',
                'Daun Pandan Catering',
                'BPM',
                'Prima Mandiri Trans',
                'Agenda Kota'
                );
         
        ?>
                
        <figure class="effect-milo <?php if($i > 10){ echo " makanan"; }else if($i > 5){ echo " minuman"; }else{ echo " snack"; }?>">
        <a  class="fancybox" href="images/portofolio_new/<?= $i ?>.jpg" data-fancybox-group="gallery"  title="Lorem ipsum dolor sit amet"><img src="images/portofolio_new/<?= $i ?>.jpg" alt="img<?= $i ?>"/>
          <figcaption>
            
                        <div class="portofolio_putih">
                        <div><strong><?= $nama_cat[$i] ?></strong><br />
                        <span class="portofolio_putih_kecil"></span> </div>
                        
                        <div class="portofolio_kiri">&nbsp;</div>
                        <div class="portofolio_kanan">WEB DESIGN</div>
                       
            </div>
                        <span class="figure_date">13 Nov 2014</span>
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