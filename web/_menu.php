<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light w-100">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand logo_h" href="?hal=home">
      <img src="img/logos.png" alt="" />
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
    <div class="row w-100 mr-0">
      <div class="col-lg-7 pr-0">
        <ul class="nav navbar-nav center_nav pull-right">

          <li class="nav-item active">
            <a class="nav-link" href="?hal=home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?hal=barang">Produk</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="?hal=artikel">Artikel</a>
          </li>

<!--           <li class="nav-item submenu dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Shop</a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="category.html">Shop Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="single-product.html">Product Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkout.html">Product Checkout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.html">Shopping Cart</a>
              </li>
            </ul>
          </li>

          <li class="nav-item submenu dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Blog</a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="single-blog.html">Blog Details</a>
              </li>
            </ul>
          </li>

          <li class="nav-item submenu dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Pages</a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="tracking.html">Tracking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="elements.html">Elements</a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="?hal=kontak">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?hal=carapesan">Cara Pesan</a>
          </li>

        </ul>
      </div>

      <div class="col-lg-5 pr-0">
        <ul class="nav navbar-nav navbar-right right_nav pull-right">

          <li class="nav-item">
            <a href="?hal=keranjang" class="icons">
              <i class="ti-shopping-cart"></i>
            </a>
          </li>

          <?php if (isset($_SESSION['member'])){ ?>
          <li class="nav-item">
            <a href="?hal=history" class="icons">
              <i class="ti-time"></i>
            </a>
          </li>

           <li class="nav-item">
            <a href="logout.php" class="icons">
              <i class="ti-lock"></i>
            </a>
          </li>
          <?php }else{ ?>

          <li class="nav-item">
            <a href="?hal=login" class="icons">
              <i class="ti-user" aria-hidden="true"></i>
            </a>
          </li>

          <?php } ?>

        </ul>
      </div>
    </div>
  </div>
</nav>
</div>