<li><a href="#"><i class="ti-home"></i> Home </a></li>

<?php if($this->session->role=='Pimpinan'){ ?>
	<li><a href="<?php echo site_url('pengguna/index')?>"><i class="ti-user"></i> Pengguna </a></li>
<?php } ?>


<?php if($this->session->role=='Admin'){ ?>
	<li><a href="<?php echo site_url('kategori/index')?>"><i class="ti-package"></i> Kategori Produk </a></li>
	<li><a href="<?php echo site_url('daerah/index')?>"><i class="ti-direction"></i> Daerah </a></li>
<?php } ?>


<li><a href="<?php echo site_url('artikel/index')?>"><i class="ti-book"></i> Artikel </a></li>
<li><a href="<?php echo site_url('barang/index')?>"><i class="ti-gift"></i> Produk </a></li>
<li><a href="<?php echo site_url('customer/index')?>"><i class="ti-themify-favicon"></i> Customer </a></li>
<li><a href="<?php echo site_url('transaksi/index')?>"><i class="ti-money"></i> Pemesanan </a></li>
<li><a href="<?php echo site_url('pembayaran/index')?>"><i class="ti-thumb-up"></i> Konfirmasi </a></li>
<li><a href="<?php echo site_url('pengiriman/index')?>"><i class="ti-car"></i> Pengiriman </a></li>

<li><a href="<?php echo site_url('laporan/index')?>"><i class="ti-filter"></i> Lap. Pemesanan </a></li>

<li><a href="<?php echo site_url('login/proseslogout')?>"><i class=" mdi mdi-exit-to-app"></i> Log Out </a></li>