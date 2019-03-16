  <?php include("bootstrap.php") ?>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
      <img src="../image/logo.png" id="dashlogo" alt="">
    </a>
    <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
    <a href="" id="dsearch" class="btn btn-outline-primary">
    <span class="icon">
      <i class="fa fa-search" aria-hidden="true"></i>
    </span>
    Search</a>
    <div class="btn-group px-4">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Admin
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="adsetting.php">
          <span><i class="fa fa-cog fa-spin fa-1x fa-fw"></i></span>
          Settings
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
          <span class="icon"><i class="fa fa-power-off" aria-hidden="true"></i></span>
          Log Out
        </a>
      </div>
    </div>
  </nav>