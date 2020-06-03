<?php
$idbarang=$_GET['id'];
$sql_prod = mysql_query("SELECT * FROM barang where idbarang='$idbarang'");
if(mysql_num_rows($sql_prod)>0)
{
  while($produk = mysql_fetch_array($sql_prod))
  {
    $gambar="../assets/upload/barang/".$produk['gambar'];
    ?>
<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
      class="banner_content d-md-flex justify-content-between align-items-center"
      >
      <div class="mb-3 mb-md-0">
        <h2>Detail Produk</h2>
        <p>Informasi Detail Produk</p>
      </div>
      <div class="page_link">
        <a href="index.html">Home</a>
        <a href="single-product.html">Detail Produk</a>
      </div>
    </div>
  </div>
</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<div class="product_image_area">
  <div class="container">
    <div class="row s_product_inner">
      <div class="col-lg-6">
        <div class="s_product_img">
          <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
          >
          <ol class="carousel-indicators">
            <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
            >
          </li>

        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
            class="d-block w-100"
            src="<?php echo $gambar; ?>"
            alt="First slide"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 offset-lg-1">
    <div class="s_product_text">
      <h3><?php echo $produk['namabarang'] ?></h3>
      <h2>Rp. <?php echo angka($produk['harga']) ?></h2>
      <ul class="list">
        <li>
          <a class="active" href="#">
            <span>Category</span> : Household</a
            >
          </li>
          <li>
            <a href="#"> <span>Availibility</span> : In Stock</a>
          </li>
        </ul>
       <?php echo $produk['detail'] ?>

        <div class="product_count">
          <label for="qty">Quantity:</label>
          <input
          type="text"
          name="qty"
          id="sst"
          maxlength="12"
          value="1"
          title="Quantity:"
          class="input-text qty"
          />
          <button
          onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
          class="increase items-count"
          type="button"
          >
          <i class="lnr lnr-chevron-up"></i>
        </button>
        
        <button
        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
        class="reduced items-count"
        type="button"
        >
        <i class="lnr lnr-chevron-down"></i>
      </button>
    </div>
    <div class="card_area">
      <a class="main_btn"  href="cart.php?aksi=tambah&id=<?php echo $produk['idbarang'];?>">Beli</a>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a
        class="nav-link"
        id="home-tab"
        data-toggle="tab"
        href="#home"
        role="tab"
        aria-controls="home"
        aria-selected="true"
        >Deskripsi</a
        >
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div
      class="tab-pane fade"
      id="home"
      role="tabpanel"
      aria-labelledby="home-tab"
      >
      <p>
        <?php echo $produk['detail'] ?>
      </p>
    </div>

  </div>
</div>
</section>
<!--================End Product Description Area =================-->
<?php
}
}
?>