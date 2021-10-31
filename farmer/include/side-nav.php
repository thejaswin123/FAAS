<?php
$farmer_animating = "";
$farmer_chats = "";
if (isset($_SESSION['farmer_id'])) {
  $farmer_id = $_SESSION['farmer_id'];
}
?>
<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="index.php" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="../assets/img/logo-small.png">
      </div>
    </a>
    <a href="index.php" class="simple-text logo-normal">
      <?php echo $_SESSION['farmer_name']; ?>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="<?php get_active_class('dashboard')?>">
        <a href="index.php?page=dashboard">
          <i class="nc-icon nc-layout-11"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="<?php get_active_class('profile')?>">
        <a href="index.php?page=profile">
          <i class="nc-icon nc-circle-10 text-warning"></i>
          <p>Profile</p>
        </a>
      </li>
      <li class="<?php get_active_class('suppliers')?>">
        <a href="index.php?page=suppliers">
          <i class="nc-icon nc-circle-10 text-primary"></i>
          <p>Suppliers</p>
        </a>
      </li>

      <li class="<?php get_active_class('all_orders')?>">
        <a href="index.php?page=all_orders">
          <i class="nc-icon nc-paper text-warning"></i>
          <p>Orders</p>
        </a>
      </li>


      <li class="<?php get_active_class('complaint')?>">
        <a href="index.php?page=complaint">
          <i class="nc-icon nc-email-85 text-primary"></i>
          <p>Complaint</p>
        </a>
      </li>

      <li class="<?php get_active_class('crops')?>">
        <a href="index.php?page=crops">
          <i class="nc-icon nc-paper text-primary"></i>
          <p>Crops</p>
        </a>
      </li>

      <li class="<?php get_active_class('all_requests')?>">
        <a href="index.php?page=all_requests">
          <i class="nc-icon nc-paper text-primary"></i>
          <p>All Requests</p>
        </a>
      </li>

    </ul>
  </div>
</div>