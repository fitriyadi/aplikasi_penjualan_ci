<div class="row">
  <div class="col-lg-12">
    <h4 class="header-title m-t-0">Informasi Pemesanan</h4>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <tr>
        <td>ID ORDER</td>
        <td><?php echo $transaksi['idtransaksi']; ?></td>
      </tr>
      <tr>
        <th>Nama Member</th>
        <th><?php echo $transaksi['nama']; ?></th>
      </tr>
      <tr>
        <th>No HP Member</th>
        <th><?php echo $transaksi['nohp']; ?></th>
      </tr>
      <tr>
        <td>Nama Penerima</td>
        <td><?php echo $transaksi['nama_penerima']; ?></td>
      </tr>
      <tr>
        <td>Alamat Penerima</td>
        <td><?php echo $transaksi['alamat_penerima']; ?></td>
      </tr>
      <tr>
        <td>Telepon Penerima</td>
        <td><?php echo $transaksi['telpon_penerima']; ?></td>
      </tr>
      <tr>
        <td>Kota</td>
        <td><?php echo $transaksi['iddaerah']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Pemesanan</td>
        <td><?php echo $transaksi['tanggal']; ?></td>
      </tr>
      <tr>
        <td>Status Pemesanan</td>
        <td><?php echo $transaksi['status']; ?></td>
      </tr>
      <tr>
        <td>Informasi Pengiriman</td>
        <td>
         <form role="form" class="form-validation"  method="post" enctype="multipart/form-data">
          <input type="hidden" name="idtransaksi" value="<?php echo $transaksi['idtransaksi']; ?>">
          <textarea class="form-control" name="info" id="editor" placeholder="Deskripsi Barang"></textarea>

          <br>
          <input type="submit" class="btn btn-primary" 
          name="ubah" value="Simpan">
        </form>
      </td>
    </tr>
  </table>

  <table class="table table-striped table-bordered bootstrap-datatable datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jumlah Beli</th>
        <th>Harga</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>

     <?php $no=0; foreach ($transaksi_detail as $row) { 
      ?>
      <tr>
        <td><?php echo $no+=1;?>.</td>
        <td><?php echo $row->namabarang; ?></td>
        <td><?php echo $row->qty; ?></td>
        <td>Rp. <?php echo $row->harga; ?></td>
        <td>Rp <?php  echo $row->harga*$row->qty ?></td>
      </tr>
      <?php
    }
    @$subTotal += $row->harga*$row->qty;

		//Total Berat
    /*	$totalBerat = ceil($subBerat);*/
    ?>
    <tr class="bor">
      <td colspan="3"></td>
      <td>Total</td>
      <td class="bor">Rp <?php echo $subTotal; ?></td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td>Ongkir</td>
      <td>Rp <?php echo $transaksi['ongkir'] ?></td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td>Total Harga</td>
      <td class="bor"><?php echo $transaksi['total'] ; ?></b></td>
    </tr>
    <?php

    ?>
    <tr class="item">
      <td colspan="6">*) Berat kurang dari 1Kg akan dibulatkan jadi 1Kg</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<script>
  tinymce.init({ 
    selector:'#editor',
    theme: 'silver',
    height: 300
  });
</script>