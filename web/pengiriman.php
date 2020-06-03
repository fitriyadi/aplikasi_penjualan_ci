<?php
$idcustomer=$_SESSION['member']['idcustomer'];
$sql_prod = mysql_query("SELECT * FROM customer where idcustomer='$idcustomer'");
$hasil = mysql_fetch_array($sql_prod);

$iddaerah=$_SESSION['daerah'];
$sql_daerah = mysql_query("SELECT * FROM daerah where iddaerah='$iddaerah'");
$daerah = mysql_fetch_array($sql_daerah);
?>

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
      class="banner_content d-md-flex justify-content-between align-items-center"
      >
      <div class="mb-3 mb-md-0">
        <h2>Informasi Pengiriman</h2>
        <p>Very us move be blessed multiply night</p>
      </div>
      <div class="page_link">
        <a href="index.html">Home</a>
        <a href="checkout.html">Product Checkout</a>
      </div>
    </div>
  </div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
  <form method="post" action="pengiriman_proses.php">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Informasi Pengiriman</h3>
            <p>Silahkan disesuaikan jika penerima atau alamat penerima dirubah</p>
            <form
            class="row contact_form"
            action="#"
            method="post"
            novalidate="novalidate"
            >

            <div class="col-md-6 form-group p_star">
              <input
              type="text"
              class="form-control"
              id="first"
              name="nama"
              value="<?php echo $hasil['nama'] ?>"
              placeholder="Nama Penerima"
              />
            </div>

            <div class="col-md-5 form-group p_star">
              <input
              type="text"
              class="form-control"
              id="last"
              name="notelpon"
              value="<?php echo $hasil['nohp'] ?>"
              placeholder="No Telpon Penerima"
              />
            </div>

            <div class="col-md-12 form-group">
              <input
              type="text"
              class="form-control"
              id="company"
              name="company"
              placeholder="Company name"
              value="<?php echo $daerah['provinsi']."-".$daerah['kota'] ?>";
              readonly
              />
            </div>

            <div class="col-md-12 form-group">
              <textarea
              class="form-control"
              name="alamat"
              id="message"
              rows="1"
              placeholder="Alamat Penerima"
              ><?php echo $hasil['alamat'] ?></textarea>
            </div>

          </form>
        </div>
        <div class="col-lg-4">
          <div class="order_box">
            <h2>Detail Pesanan</h2>
            <ul class="list">
              <li>
                <a href="#">Produk
                  <span>Total</span>
                </a>
              </li>

              <?php
              $total = 0;
              $pengiriman=$daerah['ongkir'];
              foreach($_SESSION['keranjang'] as $idbarang=>$jml) {
                $produk = mysql_fetch_array(mysql_query("SELECT * FROM barang WHERE idbarang='".$idbarang."'"));
                $total  += $produk['harga']*$jml;
                ?>
                <li>
                  <a href="?hal=barang_detail&id=<?php echo $produk['idbarang']; ?>"
                  ><?php echo $produk['namabarang'] ?>
                  <span class="middle">x <?php echo $jml; ?></span>
                  <span class="last"><?php echo angka($produk['harga']) ?></span>
                </a>
              </li>
              <?php } ?>

            </ul>
            <ul class="list list_2">
              <li>
                <a href="#"
                >Subtotal
                <span><?php echo angka($produk['harga']*$jml); ?></span>
              </a>
            </li>
            <li>
              <a href="#"
              >Berat (Kg)
              <span><?php echo angka($pengiriman)." X ".berat();?></span>
            </a>
          </li>
          <li>
            <a href="#"
            >Pengiriman
            <span><?php echo angka($pengiriman*berat()); ?></span>
          </a>
        </li>
        <li>
          <a href="#"
          >Total
          <span><?php echo angka($total+($pengiriman*berat())); ?></span>
        </a>
      </li>
    </ul>
     <button type="submit"  title="Checkout" class="main_btn" value="selesai" title="Selesai" name="aksi"><span><span>Pemesanan</span></span></button>
  </div>
</div>
</div>
</div>
</div>
</form>
</section>
    <!--================End Checkout Area =================-->