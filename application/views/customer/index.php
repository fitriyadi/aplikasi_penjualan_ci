<div class="row">
    <div class="col-sm-12">
        <h4 class="header-title m-t-0 m-b-20">Data Customer
        </h4>
    </div>
</div><!-- end row -->

<?php if($this->session->flashdata('flash')) : ?>
    <div class="row">
        <div class="col-sm-12">
            <div class='alert alert-icon alert-success alert-dismissible fade in' role='alert' id='pesan'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><i class='mdi mdi-check-all'></i><strong>Sukses !</strong> Data customer berhasil <?=$this->session->flashdata('flash');?></div>
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
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Alamat</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; foreach ($customer as $row) { ?>
                    <tr>
                        <td><?=$row->idcustomer; ?></td>
                        <td><?=$row->nama; ?></td>
                        <td><?=$row->nohp; ?></td>
                        <td><?=$row->email; ?></td>
                        <td><?=$row->password; ?></td>
                        <td><?=$row->alamat; ?></td>
                        <td>

                              <a href="<?=site_url('customer/hapus/'.$row->idcustomer);?>" 
                                  class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                  title="Hapus Data"><i class="fa fa-trash"></i></a>
                              </td>
                              <?php } ?> 
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

