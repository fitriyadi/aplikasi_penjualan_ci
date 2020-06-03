<div class="row">
  <div class="col-lg-12">
    <h4 class="header-title m-t-0">Informasi Pembayaran</h4>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <tr>
        <td>ID Pembayaran</td>
        <td><?php echo $pembayaran['idpembayaran']; ?></td>
      </tr>
      <tr>
        <th>Id Pemesanan</th>
        <th><?php echo $pembayaran['idtransaksi']; ?></th>
      </tr>
      <tr>
        <th>Nama Pentransfer</th>
        <th><?php echo $pembayaran['bank_an']; ?></th>
      </tr>
      <tr>
        <th>Nama Bank</th>
        <th><?php echo $pembayaran['bank_nama']; ?></th>
      </tr>
      <tr>
        <td>Nominal</td>
        <td><?php echo $pembayaran['dibayar']; ?></td>
      </tr>

      <tr>
        <td>Status</td>
        <td><?php echo $pembayaran['status']; ?></td>
      </tr>
      
      <td>Bukti Transfer</td>
          <?php  $gambar=base_url('web/uploaded/bukti_transfer/'.$pembayaran['bukti']); ?>
           <td><img src="<?php echo $gambar;?>"></td>
    </tr>
    <tr>
      <td>Ubah Status</td>
      <td>
        <a href="<?=site_url('pembayaran/valid/'.$pembayaran['idtransaksi']);?>" 
                class="btn btn-primary" onclick="return confirm('Apakah pembayaran Valid?')"
                title="Konfrimasi"><i class="fa fa-edit"></i></a>

          <a href="<?=site_url('pembayaran/invalid/'.$pembayaran['idtransaksi']);?>" 
                class="btn btn-danger" onclick="return confirm('Apakah Pembayaran Tidak Valid?')"
                title="Invalid"><i class="fa fa-trash"></i></a>
     </td>
   </tr>
 </table>
</div>
</div>
