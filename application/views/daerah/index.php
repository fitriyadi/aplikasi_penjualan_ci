<div class="row">
    <div class="col-sm-12">
        <h4 class="header-title m-t-0 m-b-20">Data Ongkir Daerah
             <a href="<?php echo site_url('daerah/tambah');?>" class="btn btn-primary btn-sm" style="float:right;margin-top:0px;">Tambah Data</a>
        </h4>
    </div>
</div><!-- end row -->

<?php if($this->session->flashdata('flash')) : ?>
<div class="row">
    <div class="col-sm-12">
        <div class='alert alert-icon alert-success alert-dismissible fade in' role='alert' id='pesan'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><i class='mdi mdi-check-all'></i><strong>Sukses !</strong> Data daerah berhasil <?=$this->session->flashdata('flash');?></div>
    </div>
</div><!-- end row -->
<?php endif; ?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive m-b-20">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Ongkir</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach ($daerah as $row) { ?>
                <tr>
                    <td><?=$row->iddaerah; ?></td>
                    <td><?=$row->provinsi; ?></td>
                    <td><?=$row->kota; ?></td>
                    <td><?=$row->ongkir; ?></td>
                  <td>
                    <a  href="<?=site_url('daerah/edit/'.$row->iddaerah);?>" 
                          class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                    
                    <a href="<?=site_url('daerah/hapus/'.$row->iddaerah);?>" 
                          class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                          title="Hapus Data"><i class="fa fa-trash"></i></a>
                    </td>
                    <?php } ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

