<?php $title="Farmer Registration"; 
include 'include/header.php';
farmer_register(); if(isset($_SESSION['farmer_id'])){
    redirect("farmer"); }  ?>

<section id="registration" class="padding-4	 pt-5 bg-02" style="min-height: 90vh;">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-7">
<div class="single-profile p-3 mt-5 bg-01">
<div class="profile-card">
<div class="card-title text-center">
<h3 class="section-title">Farmer Registration</h3>
<hr>
</div>
<div class="card-content mt-4">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="row align-items-center">
<div class="col-md-12">
<form method="POST">
<div class="form-group">
<label for="">FarmerID</label>
<input type="text" name="farmer_id" class="form-control" required disabled value="<?php echo last_record_id("farmer");?>">
</div>

<div class="form-group">
<label for="">Name</label>
<input type="text" name="name" class="form-control" required>
</div>
<div class="form-group">
<label for="">Address</label>
<input type="text" name="address" class="form-control" required>
</div>

<div class="form-group">
<label for="">Phone</label>

<input type="text" name="phone" class="form-control" required>
</div>
<div class="form-group">
<label for="">Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<div class="form-group">
<button class="btn btn-success w-100" name="farmer_register" type="submit"><i class="fa fa-paper-plane"></i> Register</button>
</div>
</form>
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