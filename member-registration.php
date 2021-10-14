<?php $title="Member Registration"; 
include 'include/header.php'; 
client_register(); ?>
<section id="registration" class="padding-4	 pt-5 bg-02" style="min-height: 90vh;">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-11">
<div class="single-profile p-3 mt-5 bg-01">
<div class="profile-card">
<div class="card-title text-center">
<h3 class="section-title">Member Registration</h3>
<hr>
</div>
<div class="card-content mt-4">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="row align-items-center">
<div class="col-md-6">
<form method="POST">
<div class="form-group">
<label for="">Nickname</label>
<input type="text" name="nickname" class="form-control" required>
</div>
<div class="form-group">
<label for="">Email</label>
<input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
<label for="">Password</label>
<input type="password" name="password" class="form-control password-value" required  pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$" title="Min 6 charecters and must have 1 numeric 1 Capital 1 Small and 1 special charecter " id="password_input">
<span id="password_input_error" class="text-danger" style="display: none;">Please fill this</span>
</div>
<div class="form-group">
<label for="">Confirm Password</label>
<input type="password" name="confirmpassword" class="form-control password-value" required  pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$" title="Min 6 charecters and must have 1 numeric 1 Capital 1 Small and 1 special charecter " id="confirm_password_input">
<span class="text-danger" id="same_password_error" style="display: none;">Enter Same Password</span>
</div>
<div class="form-group">
<button class="btn btn-success w-100" type="submit" name="client_register" id="form_sumbit_btn"><i class="fa fa-paper-plane"></i> Apply</button>
</div>
</form>
</div>
<div class="col-md-6">
<div class="rigth-side-text">
<div class="text-title text-center text-primary">
<h5></h5>
</div>
<div class="text-div">
<ol>
<li>Get things done in fastest and easiest way</li>
<li></li>
<li>Talk directly with pro's you choose.</li>
<li>Place order on "place your order" page and watch pro's contacting you right away.</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>
</div>
</section>
<?php include 'include/footer.php' ?>