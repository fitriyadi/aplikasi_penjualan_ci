<div class="row">
    <div class="col-lg-12">
            <h4 class="header-title m-t-0">Tambah Data Produk</h4>

            <div class="p-20 m-b-20">
                <form role="form" class="form-validation"  method="post" enctype="multipart/form-data">     


                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Kode</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="idbarang" placeholder="kategori"  value="<?=$kode?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Nama Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="namabarang" placeholder="Nama barang"  value="barang" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Kategori</label>
                        <div class="col-sm-7">
                            <select class="form-control select2" name="idkategori" required="">
                                <?php  foreach ($kategori as $row) { ?>
                                <option value="<?=$row->idkategori?>"><?=$row->namakategori?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Berat</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="berat" placeholder="Berat Barang" value="1"  required>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Harga</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="harga" placeholder="Harga Barang"  value="36000" required>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Stok</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="stok" placeholder="Stok Produk" value="100"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="detail" id="editor" placeholder="Deskripsi Barang">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Gambar</label>
                        <div class="col-sm-7">
                           <input type="file" name="gambar" class="form-control" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8 col-sm-offset-4">
                            <input type="submit" class="btn btn-primary" 
                            name="tambah" value="Simpan">
                            <a href="<?php echo site_url('barang/index');?>" class="btn btn-default waves-effect m-l-5">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>


<script>
    tinymce.init({ 
        selector:'#editor',
        theme: 'silver',
        height: 300
    });
</script>