<?php update_password($_SESSION['member_id'],"member"); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card p-4">
        <div class="card-header">
          <h4 class="card-title"> Update Password</h4>
          <hr>
        </div>
        <div class="card-body">
          <form method="POST">
          	<?php genrate_password_div($_SESSION['farmer_email'],"members"); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>