    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
          class="banner_content d-md-flex justify-content-between align-items-center"
          >
          <div class="mb-3 mb-md-0">
            <h2>Keranjang</h2>
            <p>Informasi Produk yang akan belanja</p>
          </div>
          <div class="page_link">
            <a href="?hal=home">Home</a>
            <a href="?hal=Keranjang">Cart</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <?php
  if(empty($_SESSION['member'])){

    echo "<script>alert('Anda belum terdaftar member, silahkan daftar');</script>";
    echo "<script>window.location='index.php?hal=daftar';</script>";
  }
  else if(!empty($_SESSION['keranjang']))
  {

    ?>
    <!--================Cart Area =================-->
    <form method="post" action="cart.php">
      <section class="cart_area">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                   <th scope="col">#</th>
                   <th scope="col">Produk</th>
                   <th scope="col">Harga</th>
                   <th scope="col">Jumlah</th>
                   <th scope="col">Total</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                 $total = 0;
                 foreach($_SESSION['keranjang'] as $idbarang=>$jml) {
                  $produk = mysql_fetch_array(mysql_query("SELECT * FROM barang WHERE idbarang='".$idbarang."'"));
                  $total  += $produk['harga']*$jml;
                  $gambar="../assets/upload/barang/".$produk['gambar'];

                  ?>
                  <tr>
                   <td><a href="cart.php?aksi=hapus&id=<?php echo $produk['idbarang'];?>">X</a></td>
                   <td>
                    <div class="media">
                      <div class="d-flex">
                        <img height="100px"
                        src="<?php echo $gambar; ?>"
                        alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p><?php echo $produk['namabarang'] ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>Rp. <?php echo angka($produk['harga']) ?></h5>
                  </td>
                  <td>
                   <input type="hidden" name="id[<?php echo $produk['idbarang'];?>]" value="<?php echo $produk['idbarang'];?>" />
                   <div class="product_count">
                    <input
                    type="text"
                    name="jml[<?php echo $produk['idbarang'];?>]"
                    id="sst"
                    maxlength="12"
                    value="<?php echo $jml;?>"
                    title="Quantity:"
                    class="input-text qty"
                    />
                    <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                    class="increase items-count"
                    type="button"
                    >
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                  <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                  class="reduced items-count"
                  type="button"
                  >
                  <i class="lnr lnr-chevron-down"></i>
                </button>
              </div>
            </td>
            <td>
              <h5>Rp. <?php echo angka($produk['harga']*$jml); ?></h5>
            </td>
          </tr>

          <?php
        }
        ?>


        <tr class="bottom_button">
          <td></td>
          <td>
           <button type="submit" class="gray_btn" value="ubah" title="Update" name="aksi"><span><span>Ubah</span></span></button>
         </td>

         <td></td>
         <td>
          <h5>Subtotal</h5>
        </td>
        <td>
          <h5>Rp. <?php echo angka($total); ?></h5>
        </td>
      </tr>
      <tr class="shipping_area">
        <td>
           <h5>Pengiriman</h5>
        </td>
        <td></td>
        <td></td>
        <td>
         
        </td>
        <td>
          <div class="shipping_box">
            <select class="shipping_select" name="daerah">
              <?php 
              $sql_prod = mysql_query("SELECT * FROM daerah");
              if(mysql_num_rows($sql_prod)>0)
              {
                while($daerah = mysql_fetch_array($sql_prod))
                {
                  ?>
                  <option value="<?php echo $daerah['iddaerah'];?>"> <?php echo $daerah['provinsi']." - ".$daerah['kota']; ?></option>
                <?php
                  }
                   }
                ?>
                </select>
              </div>
            </td>
          </tr>
          <tr class="out_button_area">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <div class="checkout_btn_inner">
                <a class="gray_btn" href="?hal=barang">Belanja Lagi</a>
                <button type="submit"  title="Checkout" class="main_btn" value="selesai" title="Selesai" name="aksi"><span><span>Selesai Belanja</span></span></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
</form>
<!--================End Cart Area =================-->
<?php
}else{ ?>

<section class="section_gap">
  <div class="container">
    <div class="alert alert-secondary" role="alert">
      Keranjang belanja Kosong
    </div>
  </div>
</section>

<?php } ?>