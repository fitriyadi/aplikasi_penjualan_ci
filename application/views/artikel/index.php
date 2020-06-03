<div class="row">
    <div class="col-sm-12">
        <h4 class="header-title m-t-0 m-b-20">Data Artikel
            <?php if($this->session->role=='Admin'){ ?>
             <a href="<?php echo site_url('artikel/tambah');?>" class="btn btn-primary btn-sm" style="float:right;margin-top:0px;">Tambah Data</a>
             <?php } ?>
        </h4>
    </div>
</div><!-- end row -->

<?php if($this->session->flashdata('flash')) : ?>
<div class="row">
    <div class="col-sm-12">
        <div class='alert alert-icon alert-success alert-dismissible fade in' role='alert' id='pesan'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><i class='mdi mdi-check-all'></i><strong>Sukses !</strong> Data artikel berhasil <?=$this->session->flashdata('flash');?></div>
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
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Isi</th>
                        <th>Gambar</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach ($artikel as $row) {
                    $gambar=base_url('assets/upload/artikel/'.$row->gambar);
                    ?>
                <tr>
                    <td><?=$row->idartikel; ?></td>
                    <td><?=$row->judul; ?></td>
                    <td><?=$row->tanggal; ?></td>
                    <td><?=substr(strip_tags($row->isi),0,100); ?></td>
                    <td><img width="200px;" src="<?=$gambar;?>"></td>
                  <td>

                    <a  href="<?=site_url('artikel/edit/'.$row->idartikel);?>" 
                          class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                    
                    <a href="<?=site_url('artikel/hapus/'.$row->idartikel);?>" 
                          class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                          title="Hapus Data"><i class="fa fa-trash"></i></a>
                    </td>
                    <?php } ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

