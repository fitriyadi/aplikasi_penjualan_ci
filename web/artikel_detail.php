<?php
$idartikel=$_GET['id'];
$sql_prod = mysql_query("SELECT * FROM artikel where idartikel='$idartikel'");
if(mysql_num_rows($sql_prod)>0)
{
  while($artikel = mysql_fetch_array($sql_prod))
  {
    $gambar="../assets/upload/artikel/".$artikel['gambar'];
    ?>
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
<section class="blog_area single-post-area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <div class="single-post">
          <div class="feature-img">
            <img class="img-fluid" src="<?php echo $gambar; ?>" alt="">
          </div>
          <div class="blog_details">
            <h2><?php echo $artikel['judul']; ?></h2>
              <?php echo $artikel['isi']; ?>
          </div>
        </div>
        <div class="navigation-top">
          <div class="d-sm-flex justify-content-between text-center">
            <ul class="social-icons">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-dribbble"></i></a></li>
              <li><a href="#"><i class="ti-wordpress"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog_right_sidebar">

          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Artikel Terbaru</h3>

            <?php
            $sql_prod = mysql_query("SELECT * FROM artikel");
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
<?php
}
}
?>