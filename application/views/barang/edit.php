<div class="row">
    <div class="col-lg-12">
            <h4 class="header-title m-t-0">Ubah Data Produk</h4>

            <div class="p-20 m-b-20">
                <form role="form" class="form-validation"  method="post" enctype="multipart/form-data">     


                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Kode</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="idbarang" placeholder="kategori"  value="<?=$barang['idbarang']?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Nama Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="namabarang" placeholder="Nama barang" value="<?=$barang['namabarang']?>"required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Kategori</label>
                        <div class="col-sm-7">
                            <select class="form-control select2" name="idkategori" required="">
                                <option value="K01">Kategori 1</option>
                                <option value="K02">Kategori 1</option>
                            </select>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Berat</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="berat" placeholder="Berat Barang" value="<?=$barang['berat']?>" required>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Harga</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="harga" placeholder="Harga Barang" value="<?=$barang['harga']?>" required>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Stok</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="stok" placeholder="Stok Produk" value="<?=$barang['stok']?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="detail" id="editor" placeholder="Deskripsi Barang"><?=$barang['detail']?></textarea>
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
                            name="ubah" value="Simpan">
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