<div class="row">
  <div class="col-sm-12">
    <h4 class="header-title m-t-0 m-b-20">Data Konfirmasi Pembayaran
    </h4>
  </div>
</div><!-- end row -->

<?php if($this->session->flashdata('flash')) : ?>
  <div class="row">
    <div class="col-sm-12">
      <div class='alert alert-icon alert-success alert-dismissible fade in' role='alert' id='pesan'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><i class='mdi mdi-check-all'></i><strong>Sukses !</strong> Data pembayaran berhasil <?=$this->session->flashdata('flash');?></div>
    </div>
  </div><!-- end row -->
<?php endif; ?>

<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive m-b-20">
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Id Pembayaran</th>
            <th>Id Pemesanan</th>
            <th>Nama Pentransfer</th>
            <th>No Rekening</th>
            <th>Bank</th>
            <th>Status</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=0; foreach ($pembayaran as $row) { ?>
          <tr>
            <td><?=$row->idpembayaran; ?></td>
            <td><?=$row->idtransaksi; ?></td>
            <td><?=$row->bank_an; ?></td>
            <td><?=$row->bank_no; ?></td>
            <td><?=$row->bank_nama; ?></td>
            <td><?=$row->status; ?></td>
            <td>
             <a  href="<?=site_url('pembayaran/detail/'.$row->idpembayaran);?>" 
              class="btn btn-primary" title="Detail Data"><i class="fa fa-eye"></i> </a>

              <a href="<?=site_url('pembayaran/hapus/'.$row->idpembayaran);?>" 
                class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                title="Hapus Data"><i class="fa fa-trash"></i></a>
              </td>
              <?php } ?> 
            </tbody>
          </table>
        </div>
      </div>
    </div>

