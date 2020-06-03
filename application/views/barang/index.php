<div class="row">
    <div class="col-sm-12">
        <h4 class="header-title m-t-0 m-b-20">Data Produk
            <?php if($this->session->role=='Admin'){ ?>
           <a href="<?php echo site_url('barang/tambah');?>" class="btn btn-primary btn-sm" style="float:right;margin-top:0px;">Tambah Data</a>
           <?php } ?>
       </h4>
   </div>
</div><!-- end row -->

<?php if($this->session->flashdata('flash')) : ?>
    <div class="row">
        <div class="col-sm-12">
            <div class='alert alert-icon alert-success alert-dismissible fade in' role='alert' id='pesan'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><i class='mdi mdi-check-all'></i><strong>Sukses !</strong> Data barang berhasil <?=$this->session->flashdata('flash');?></div>
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
                        <th>Nama</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Detail</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; foreach ($barang as $row) { 
                       $gambar=base_url('assets/upload/barang/'.$row->gambar);
                       ?>
                    <tr>
                        <td><?=$row->idbarang; ?></td>
                        <td><?=$row->namabarang; ?></td>
                        <td><?=$row->berat; ?></td>
                        <td><?=$row->harga; ?></td>
                        <td><?=$row->stok; ?></td>
                       <td><img width="100px;" src="<?=$gambar;?>"></td>
                        <td><?=substr(strip_tags($row->detail),0,100); ?>...</td>
                        <td>
                            <a  href="<?=site_url('barang/edit/'.$row->idbarang);?>" 
                              class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>

                              <a href="<?=site_url('barang/hapus/'.$row->idbarang);?>" 
                                  class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                  title="Hapus Data"><i class="fa fa-trash"></i></a>
                              </td>
                              <?php } ?> 
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

