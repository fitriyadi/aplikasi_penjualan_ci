<div class="row">
    <div class="col-md-12">
        <div class="panel-body">

           <div class="row">
            <div class="col-md-12">
                <h2 align="center"> Laporan Transaksi Butterfly Computer</h2>
                <p align="center">Periode</p>
                <p align="center"><?php echo "Bulan : ".$bulan.", Tahun : ".$tahun; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table m-t-30 border">
                       <thead>
                        <tr>
                            <th>No Pesan</th>
                            <th>Id Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $total=0;$no=0; foreach ($transaksi as $row) { 

                        if($row->status=='Pengiriman' || $row->status=='Diterima' || $row->status=='Valid'){
                            $total+=$row->harga*$row->qty;
                            ?>
                            <tr>
                                <td><?php echo $row->idtransaksi;?>.</td>
                                <td><?php echo $row->idbarang;?>.</td>
                                <td><?php echo $row->namabarang; ?></td>
                                <td><?php echo $row->qty; ?></td>
                                <td>Rp. <?php echo $row->harga; ?></td>
                                <td>Rp <?php  echo $row->harga*$row->qty ?></td>
                            </tr>
                            <?php
                        }
                    } ?>
                    <tr>
                        <th colspan="5">Total</th>
                        <th><?php echo number_format($total,0); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="clearfix p-t-50">

        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">
        <div class="pull-right">
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="hidden-print m-t-30 m-b-30">
    <div class="text-right">

        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a> 
    </div>
</div>
</div>
</div>
</div>
<!-- end row -->