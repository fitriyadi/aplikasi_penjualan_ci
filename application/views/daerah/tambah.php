<div class="row">
    <div class="col-lg-12">
            <h4 class="header-title m-t-0">Tambah Data Daeah</h4>

            <div class="p-20 m-b-20">
                <form role="form" class="form-validation"  method="post" enctype="multipart/form-data">     

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Provinsi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="provinsi" placeholder="provinsi"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Kota</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kota" placeholder="Kota"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Ongkir</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="ongkir" placeholder="ongkir"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8 col-sm-offset-4">
                            <input type="submit" class="btn btn-primary" 
                            name="tambah" value="Simpan">
                            <a href="<?php echo site_url('kategori/index');?>" class="btn btn-default waves-effect m-l-5">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>