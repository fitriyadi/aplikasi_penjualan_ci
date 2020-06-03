<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content row">
        <div class="col-lg-12">
          <p class="sub text-uppercase">Koleksi Kain</p>
          <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
          <h4>For Beautiful Traditional.</h4>
          <a class="main_btn mt-40" href="?hal=barang">Lihat Koleksi</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!-- Start feature Area -->
<section class="feature-area section_gap_bottom_custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-money"></i>
            <h3>Garansi Uang Kembali</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-truck"></i>
            <h3>Pengiriman Gratis</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-support"></i>
            <h3>Selalu Dibantu</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="single-feature">
          <a href="#" class="title">
            <i class="flaticon-blockchain"></i>
            <h3>Pembayaran Aman</h3>
          </a>
          <p>Shall open divide a one</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End feature Area -->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Produk Terlaris</span></h2>
          <p>Bring called seed first of third give itself now ment</p>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      $sql_prod = mysql_query("SELECT barang.idbarang,namabarang,gambar,barang.harga FROM barang join transaksi_detail using(idbarang) group by barang.idbarang,namabarang,gambar,barang.harga ORDER BY sum(qty) DESC LIMIT 3");
      if(mysql_num_rows($sql_prod)>0)
      {
        while($produk = mysql_fetch_array($sql_prod))
        {
          $gambar="../assets/upload/barang/".$produk['gambar'];
          ?>

          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?php echo $gambar; ?>" alt="" />
                <div class="p_icon">
                  <a href="?hal=barang_detail&id=<?php echo $produk['idbarang'];?>">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="?hal=barang_detail&id=<?php echo $produk['idbarang'];?>" class="d-block">
                  <h4><?php  echo $produk['namabarang'];?></h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4"><?php  echo angka($produk['harga']);?></span>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>

    </div>
  </div>
</section>
<!--================ End Feature Product Area =================-->

<!--================ Inspired Product Area =================-->
<section class="inspired_product_area section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Produk Terbaru</span></h2>
          <p>Berisi tentang produk terbaru yang ada</p>
        </div>
      </div>
    </div>

    <div class="row">

      <?php
      $sql_prod = mysql_query("SELECT * FROM barang ORDER BY idbarang DESC LIMIT 4");
      if(mysql_num_rows($sql_prod)>0)
      {
        while($produk = mysql_fetch_array($sql_prod))
        {
          $gambar="../assets/upload/barang/".$produk['gambar'];
          ?>

      <div class="col-lg-3 col-md-6">
        <div class="single-product">
          <div class="product-img">
             <img class="img-fluid w-100" src="<?php echo $gambar; ?>" alt="" />
            <div class="p_icon">
              <a href="#">
                <i class="ti-eye"></i>
              </a>

              <a href="#">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4><?php  echo $produk['namabarang'];?></h4>
            </a>
            <div class="mt-3">
              <span class="mr-4"><?php  echo angka($produk['harga']);?></span>
            </div>
          </div>
        </div>
      </div>
          <?php
        }
      }
      ?>

    </div>
  </div>
</section>
<!--================ End Inspired Product Area =================-->

<!--================ Start Blog Area =================-->
<section class="blog-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Artikel Terbaru</span></h2>
          <p>Informasi artike terbaru diupload</p>
        </div>
      </div>
    </div>

    <div class="row">
       <?php
          $sql_prod = mysql_query("SELECT * FROM artikel order by idartikel desc limit 3");
          if(mysql_num_rows($sql_prod)>0)
          {
            while($artikel = mysql_fetch_array($sql_prod))
            {
              $gambar="../assets/upload/artikel/".$artikel['gambar'];
              ?>
      <div class="col-lg-4 col-md-6">
        <div class="single-blog">
          <div class="thumb">
            <img class="img-fluid" src="img/b1.jpg" alt="">
          </div>
          <div class="short_details">
            <div class="meta-top d-flex">
              <a href="#">By Admin</a>
            </div>
            <a class="d-block" href="?hal=artikel_detail&id=<?php echo $artikel['idartikel']; ?>">
              <h4><?php echo $artikel['judul']; ?></h4>
            </a>
            <div class="text-wrap">
              <p>
               <?php echo substr(strip_tags($artikel['isi']),0,100); ?>...
              </p>
            </div>
            <a href="?hal=artikel_detail&id=<?php echo $artikel['idartikel']; ?>" class="blog_btn">Selengkapnya <span class="ml-2 ti-arrow-right"></span></a>
          </div>
        </div>
      </div>
      <?php } } ?>

    </div>
  </div>
</section>
<!--================ End Blog Area =================-->