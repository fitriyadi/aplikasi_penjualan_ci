    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
          class="banner_content d-md-flex justify-content-between align-items-center"
          >
          <div class="mb-3 mb-md-0">
            <h2>History Pemesnaan</h2>
            <p>Berisis tentang Informasi Pemesanan</p>
          </div>
          <div class="page_link">
            <a href="?hal=home">Home</a>
            <a href="?hal=history">History</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <table id="" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>No Pesan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $idcustomer=$_SESSION['member']['idcustomer'];
          $sql = mysql_query("SELECT * FROM transaksi where idcustomer='$idcustomer'");
          $x=0;
          $y=0;
          if(mysql_num_rows($sql)>0)
          {
            $no=0;
            while($hasil = mysql_fetch_array($sql))
              extract($hasil);
            {
              ?>
              <tr>
                <td><?php echo $no+=1;  ?></td>
                <td><?php echo $idtransaksi;  ?></td>
                <td><?php echo $tanggal;  ?></td>
                <td><?php echo $total;  ?></td>
                <td><?php echo $status;  ?>
                  <?php if($status=='Pengiriman' || $status=='Diterima'){ ?>
                  <button data-toggle="collapse" style="float: right;" class="btn btn-icon btn-primary" data-target="#demo">Detail</button>

                  <div id="demo" class="collapse">
                    <?php echo $info_pengiriman; ?>
                  </div>
                  <?php } ?>

                </td>
                <th width="20%">


                  <?php if($status=='pesan' || $status=='Tidak Valid'){ ?>
                  <a href="?hal=konfirmasi&id=<?php echo $idtransaksi; ?>" class="btn btn-icon btn-primary" title="Konfirmasi"><i class="fa fa-list"></i></a>
                  
                  <a href="invoice.php?id=<?php echo $idtransaksi; ?>" target='_blank' class="btn btn-icon btn-primary" title="Invoice"><i class="fa fa-print"></i></a>
                  <?php } ?>

                  <?php if($status=='Valid'){ ?>
                  <a href="invoice.php?id=<?php echo $idtransaksi; ?>" target='_blank' class="btn btn-icon btn-primary" title="Invoice"><i class="fa fa-print"></i></a>
                  <?php } ?>


                  <?php if($status=='Pengiriman'){ ?>

                  <a href="konfirmasi_proses.php?diterima=<?php echo $idtransaksi ?>" 
                    class="btn btn-success" onclick="return confirm('Apakah barang sudah sampai ?')"
                    title="Hapus Data"><i class="fa fa-check"></i></a>

                    <a href="invoice.php?id=<?php echo $idtransaksi; ?>" target='_blank' class="btn btn-icon btn-primary" title="Invoice"><i class="fa fa-print"></i></a>

                    <?php } ?>

                    <?php if($status=='Diterima'){ ?>

                    <a href="invoice.php?id=<?php echo $idtransaksi; ?>" target='_blank' class="btn btn-icon btn-primary" title="Invoice"><i class="fa fa-print"></i></a>

                    <?php } ?>
                  </th>
                </tr>

                <?php } } ?>
              </tbody>
            </table>
          </div>
        </section>
        <!-- ================ contact section end ================= -->

