<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
      class="banner_content d-md-flex justify-content-between align-items-center"
      >
      <div class="mb-3 mb-md-0">
        <h2>Artikel</h2>
        <p>Informasi tentang artikel yang ada</p>
      </div>
      <div class="page_link">
        <a href="?hal=home">Home</a>
        <a href="?hal=artikel">Artikel </a>
      </div>
    </div>
  </div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">

         <?php
         $p      = new Paging;
         $batas  = 5;
         $posisi = $p->cariPosisi($batas);

         $jmldata = mysql_num_rows(mysql_query("SELECT * FROM artikel"));
         $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
         $linkHalaman = $p->navHalaman($_GET['page'], $jmlhalaman,'artikel',$jmldata);

         $sql_prod = mysql_query("SELECT * FROM artikel ORDER BY idartikel  LIMIT $posisi,$batas");
         if(mysql_num_rows($sql_prod)>0)
         {
          while($artikel = mysql_fetch_array($sql_prod))
          {
            $gambar="../assets/upload/artikel/".$artikel['gambar'];
            ?>

            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="<?php echo $gambar; ?>" alt="">
                <a href="#" class="blog_item_date">
                  <p><?php echo $artikel['tanggal'] ?></p>
                </a>
              </div>

              <div class="blog_details">
                <a class="d-inline-block" href="?hal=artikel_detail&id=<?php echo $artikel['idartikel'] ?>">
                  <h2><?php echo $artikel['judul']; ?></h2>
                </a>
                <p><?php echo $artikel['isi']; ?></p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="ti-user"></i> Admin</a></li>
                </ul>
              </div>
            </article>
            <?php } } ?>

            <div class="col-lg-9">
              <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                  <?php echo $linkHalaman; ?>
                </ul>
              </nav>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="blog_right_sidebar">

            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">Artikel Terbaru</h3>

              <?php
              $sql_prod = mysql_query("SELECT * FROM artikel order by idartikel desc limit 5");
              if(mysql_num_rows($sql_prod)>0)
              {
                while($artikel = mysql_fetch_array($sql_prod))
                {
                  $gambar="../assets/upload/artikel/".$artikel['gambar'];
                  ?>
                  <div class="media post_item">
                    <img height="50px" src="<?php echo $gambar ?>" alt="post">
                    <div class="media-body">
                      <a class="d-inline-block" href="?hal=artikel_detail&id=<?php echo $artikel['idartikel'] ?>">
                        <h3><?php echo substr(strip_tags($artikel['judul']),0,25); ?>...</h3>
                      </a>
                      <p><?php echo $artikel['tanggal']; ?></p>
                    </div>
                  </div>

                  <?php } } ?>
                </aside>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================Blog Area =================-->
