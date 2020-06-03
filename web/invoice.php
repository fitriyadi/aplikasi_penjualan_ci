<?php
session_start();
include 'pengaturan/koneksi.php';
include 'pengaturan/fungsi.php';

?>
<link href="css/invoice/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="css/invoice/bootstrap.min.js"></script>
<script src="css/invoice/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
$id=$_GET['id'];
$sql1 = mysql_query("SELECT  * from transaksi join customer using(idcustomer) where idtransaksi='$id'");
if(mysql_num_rows($sql1)>0)
{
  $hasil = mysql_fetch_array($sql1);
  extract($hasil);
  ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="invoice-title">
         <h2>UKM Maju Jaya</h2><h3 class="pull-right">Order # <?php echo $idtransaksi; ?></h3>
       </div>
       <hr>
       <div class="row">
         <div class="col-xs-6">
          <address>
            <strong>Dipesan Oleh</strong><br>
            <?php echo $nama; ?><br>
            <?php echo $nohp; ?><br>
            <?php echo $email; ?><br>
            <?php echo $alamat; ?><br>
          </address>
        </div>
        <div class="col-xs-6 text-right">
          <address>
           <strong>Dikirim Ke:</strong><br>
           <?php echo $nama_penerima; ?><br>
           <?php echo $telpon_penerima; ?><br>
           <?php echo $alamat_penerima; ?><br>
         </address>
       </div>
     </div>
     <div class="row">
       <div class="col-xs-6">
        <address>
         <strong>Status Pemesanan:</strong><br>
         <?php echo $status; ?><br>
       </address>

       <?php if($status=='Pengiriman' or $status='Diterima'){ ?>
       <address>
         <strong>Info Pengiriman:</strong><br>
         <?php echo $info_pengiriman; ?><br>
         
       </address>
       <?php } ?>

     </div>
     <div class="col-xs-6 text-right">
      <address>
       <strong>Tanggal Pesan:</strong><br>
       <?php echo $tanggal; ?><br>
     </address>
   </div>
 </div>
</div>
</div>
<?php 
}
?>
<div class="row">
 <div class="col-md-12">
  <div class="panel panel-default">
   <div class="panel-heading">
    <h3 class="panel-title"><strong>Detail Barang</strong></h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
     <table class="table table-condensed">
      <thead>
        <tr>
         <td><strong>Barang</strong></td>
         <td class="text-right"><strong>Harga</strong></td>
         <td class="text-right"><strong>Jumlah</strong></td>
         <td class="text-right"><strong>Subtotal</strong></td>
       </tr>
     </thead>
     <tbody>
       <!-- foreach ($order->lineItems as $line) or some such thing here -->
       <?php 
       $sql = mysql_query("SELECT * FROM transaksi_detail join barang using(idbarang) where idtransaksi='$id'");
       if(mysql_num_rows($sql)>0)
       {
        $subtotal=0;
        while($hasil = mysql_fetch_array($sql))
        {
          extract($hasil);
          $subtotal+=($harga*$qty)
          ?>  
          <tr>
           <td class="text-left"><?php echo $namabarang;  ?></td>
           <td class="text-right"><?php echo angka($harga);  ?></td>
           <td class="text-right"><?php echo $qty;  ?></td>
           <td class="text-right"><?php echo angka($harga*$qty);  ?></td>
         </tr>
         <?php }} ?>

         <tr>
          <td class="thick-line"></td>
          <td class="thick-line"></td>
          <td class="thick-line text-center"><strong>Subtotal</strong></td>
          <td class="thick-line text-right"><?php echo angka($subtotal); ?></td>
        </tr>
        <tr>
          <td class="no-line"></td>
          <td class="no-line"></td>
          <td class="no-line text-center"><strong>Biaya Kirim</strong></td>
          <td class="no-line text-right"><?php echo angka($ongkir); ?></td>
        </tr>
        <tr>
          <td class="no-line"></td>
          <td class="no-line"></td>
          <td class="no-line text-center"><strong>Total</strong></td>
          <td class="no-line text-right"><?php echo angka($total); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
</div>