<section class="cat_product_area section_gap">
  <div class="container">
    <div class="row flex-row-reverse">
      <div class="col-lg-9">

        <div class="latest_product_inner">
          <div class="row"> 

            <?php
            $p      = new Paging;
            $batas  = 6;
            $posisi = $p->cariPosisi($batas);

            $jmldata = mysql_num_rows(mysql_query("SELECT * FROM barang"));
            $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
            $linkHalaman = $p->navHalaman($_GET['page'], $jmlhalaman,'barang',$jmldata);

            $sql_prod = mysql_query("SELECT * FROM barang ORDER BY idbarang LIMIT $posisi,$batas");
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
                        <a href="?hal=barang_detail&id=<?php echo $produk['idbarang'];?>">
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

            <div class="col-lg-9">
              <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                  <?php echo $linkHalaman; ?>
                </ul>
              </nav>
            </div>



          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="left_sidebar_area">
          <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
              <h3>Kategori Barang</h3>
            </div>
            <div class="widgets_inner">
              <ul class="list">
                <?php
                $sql_kat = mysql_query("SELECT * from kategori");
                while($r_kat = mysql_fetch_array($sql_kat))
                {
                  ?>
                  <li><a href="?hal=kategori&id=<?php echo $r_kat['idkategori'];?>"><?php echo $r_kat['namakategori'] ?></a></li>
                  <?php
                }
                ?>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>
