<?php
$id=$_GET['id'];
$sql_prod = mysql_query("SELECT * FROM transaksi where idtransaksi='$id'");
$hasil = mysql_fetch_array($sql_prod);
extract($hasil);
?>

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
      class="banner_content d-md-flex justify-content-between align-items-center"
      >
      <div class="mb-3 mb-md-0">
        <h2>Konfirmasi Pembayaran</h2>
        <p></p>
      </div>
      <div class="page_link">
        <a href="index.php">Home</a>
        <a href="?hal=history">Konfirmasi Pembayaran</a>
      </div>
    </div>
  </div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
  <div class="container">
    <div class="section-top-border">
     <form class="form-horizontal" role="form" method="POST" action="konfirmasi_proses.php" enctype="multipart/form-data">

      <input type="hidden" name="idtransaksi" value="<?php echo $id;?>" >
      <div class="row">
        <div class="col-md-3 field-label-responsive">
          <label for="name">No Pesan</label>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" name="nopesan" class="form-control" id="name"
              placeholder="<?php echo $idtransaksi; ?>" readonly="">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 field-label-responsive">
          <label for="name">Total Dibayarkan</label>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" name="dibayar" class="form-control" id="name"
              value="<?php echo $total; ?>" readonly>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 field-label-responsive">
          <label for="name">No Rekening</label>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" name="bank_no" class="form-control" id="name"
              placeholder="No Rekening" required autofocus>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 field-label-responsive">
          <label for="name">Bank</label>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" name="bank_nama" class="form-control" id="name"
              placeholder="Nama Bank" required autofocus>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 field-label-responsive">
          <label for="name">Atas Nama</label>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" name="bank_an" class="form-control" id="name"
              placeholder="Atas Nama Bank" required autofocus>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 field-label-responsive">
          <label for="name">Bukti (*File Jpg)</label>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="file" name="bukti_transfer" class="form-control" id="name"
              placeholder="Bukti Bank" required autofocus>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
          <button type="submit" name="kirim" class="btn btn-success"><i class="fa fa-plus"></i> Proses</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</section>

    <!--================End Checkout Area =================-->