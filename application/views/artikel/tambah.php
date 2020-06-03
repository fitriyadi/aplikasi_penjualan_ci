<div class="row">
    <div class="col-lg-12">
            <h4 class="header-title m-t-0">Tambah Data Artikel</h4>

            <div class="p-20 m-b-20">
                <form role="form" class="form-validation"  method="post" enctype="multipart/form-data">     

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul" placeholder="Judul Artikel"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hori-pass1" class="col-sm-4 form-control-label">Isi Artikel</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="isi" id="editor" placeholder="Isi Artikel"></textarea>
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
                            <a href="<?php echo site_url('artikel/index');?>" class="btn btn-default waves-effect m-l-5">Batal</a>
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