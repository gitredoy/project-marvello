      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky" id="sidebar_height">
          <ul class="nav flex-column">
            <li class="nav-item bg-red">
              <a class="nav-link active" href="adhome.php">
                <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" target="_blank" href="../index.php">
                <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                Visit Site 
              </a>
            </li>

             <li class="nav-item"> <a class="nav-link" href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active"><span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span> <span class="nav-label">All Products</span></a>
                <ul class="sub-menu collapse" id="e-commerce">
                    <li><a href="allproduct.php">View Products</a></li>
                    <li><a href="addproducts.php"> Add Product</a></li>
                    <li><a href="">Product edit</a></li>

                </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="adorder.php">
                <span class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dcoupons.php">
                <span class="icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
                Coupons
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adreview.php">
                <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                Reviews
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dwidraw.php">
                <span class="icon"><i class="fa fa-upload" aria-hidden="true"></i></span>
                Widraw
              </a>
            </li>
          </ul>
          <ul class="nav flex-column mb-2">
<!--
            <li class="nav-item">
              <a class="nav-link" href="adsetting.php">
                <span><i class="fa fa-cog fa-spin fa-1x fa-fw"></i></span>
                Settings
              </a>
            </li>
-->
         <li class="nav-item" id="collap"> 
            <a class="nav-link arrow" href="#" data-toggle="collapse" data-target="#setting" class="collapsed active"><span class="icon"><i class="fa fa-cog fa-spin  " aria-hidden="true"></i></span> <span class="nav-label">Setting</span>
            </a>
                    <ul class="sub-menu collapse" id="setting">
                        <li><a href=""> Login</a></li>
                        <li><a href=""> Log Out</a></li>
                        <li><a href=""> Password Change </a></li>

                    </ul>
                </li>
         
         
          </ul>
        </div>
      </nav>