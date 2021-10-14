<style type="text/css">
.animate-notification {
    color: #fff;
    animation: change_text 2s infinite;
}

@keyframes change_text {
  0%   {color: #ffffff;}
  70% {color: #427bff;}
  100%   {color: #ffffff;}
}
</style>
<div class="main-panel">
  <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="index.php">Supplier Dashboard</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn-magnify" href="index.php">
              <i class="nc-icon nc-layout-11"></i>
              <p>
                <span class="d-lg-none d-md-block">Dashboard</span>
              </p>
            </a>
          </li>
          <!-- <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nc-icon nc-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->

          <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nc-icon nc-single-02"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php?page=profile"><i class="nc-icon nc-circle-10"></i> Profile</a>
              <!-- <a class="dropdown-item" href="index.php?page=password"><i class="nc-icon nc-key-25"></i> Password</a> -->
              <a class="dropdown-item" href="logout.php"><i class="nc-icon nc-button-power"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>