<div class="row">
  <div class="col-sm-12">
    <h4 class="header-title m-t-0 m-b-20">Data Pengiriman Pesanan
    </h4>
  </div>
</div><!-- end row -->

<?php if($this->session->flashdata('flash')) : ?>
  <div class="row">
    <div class="col-sm-12">
      <div class='alert alert-icon alert-success alert-dismissible fade in' role='alert' id='pesan'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><i class='mdi mdi-check-all'></i><strong>Sukses !</strong> Data Pengiriman berhasil <?=$this->session->flashdata('flash');?></div>
    </div>
  </div><!-- end row -->
<?php endif; ?>

<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive m-b-20">
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Id Pemesanan</th>
            <th>Nama Penerima</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
             <th>Info</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=0; foreach ($transaksi as $row) { ?>
          <tr>
            <td><?=$row->idtransaksi; ?></td>
            <td><?=$row->nama_penerima; ?></td>
            <td><?=$row->telpon_penerima; ?></td>
            <td><?=$row->alamat_penerima; ?></td>
            <td><?=$row->tanggal; ?></td>
            <td><?=$row->total; ?></td>
            <td><?=$row->status; ?></td>
            <td><?=$row->info_pengiriman; ?></td>

            <td>
               <a  href="<?=site_url('pengiriman/edit/'.$row->idtransaksi);?>" 
                          class="btn btn-primary" title="Detail Data"><i class="fa fa-eye"></i> </a>

              </td>
              <?php } ?> 
            </tbody>
          </table>
        </div>
      </div>
    </div>

