<div class="row">
    <div class="col-lg-12">
        <h4 class="header-title m-t-0">Filter laporan</h4>

        <div class="p-20 m-b-20">
            <form role="form" class="form-validation"  method="post" enctype="multipart/form-data">     


                <div class="form-group row">
                    <label for="hori-pass1" class="col-sm-4 form-control-label">Bulan</label>
                    <div class="col-sm-7">
                        <select name="bulan" class="form-control">
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hori-pass1" class="col-sm-4 form-control-label">Tahun</label>
                    <div class="col-sm-7">
                        <select name="tahun" class="form-control">
                            <?php $tahun=date('Y');for ($i=2019;$i<=$tahun; $i++){ ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-8 col-sm-offset-4">
                        <input type="submit" class="btn btn-primary" 
                        name="lihat" value="Lihat">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>