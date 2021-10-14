<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="index.php" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="../assets/img/logo-small.png">
      </div>
    </a>
    <a href="index.php" class="simple-text logo-normal">
      Admin
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

      <li class="<?php get_active_class('farmers')?>">
        <a href="index.php?page=farmers">
          <i class="nc-icon nc-single-02"></i>
          <p>Farmers</p>
        </a>
      </li>

      <li class="<?php get_active_class('suppliers')?>">
        <a href="index.php?page=suppliers">
          <i class="nc-icon nc-single-02"></i>
          <p>Supliers</p>
        </a>
      </li>

      <li class="<?php get_active_class('crops')?>">
        <a href="index.php?page=crops">
          <i class="nc-icon nc-paper"></i>
          <p>Crops</p>
        </a>
      </li>

      <li class="<?php get_active_class('crop_purchased')?>">
        <a href="index.php?page=crop_purchased">
          <i class="nc-icon nc-paper"></i>
          <p>Crop Purchased</p>
        </a>
      </li>

      <li class="<?php get_active_class('add_tips')?>">
        <a href="index.php?page=add_tips">
          <i class="nc-icon nc-paper"></i>
          <p>Farmer Tips</p>
        </a>
      </li>

      <li class="<?php get_active_class('complaints')?>">
        <a href="index.php?page=complaints">
          <i class="nc-icon nc-chat-33"></i>
          <p>Complains</p>
        </a>
      </li>

    </ul>
  </div>
</div>