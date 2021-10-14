<?php $user = get_farmer_info($_SESSION['user_id'],"farmer"); extract($user); update_farmer();?>
<style type="text/css">
  .image-div img {
    width: 20%;
  }
</style>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Profile Detail</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form class="text-left mb-3 form-box pr-3" method="POST">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label>SupplierID<span class="text-danger">*</span></label>
                      <input type="text" class="form-control w-100" disabled value="<?php echo $farmer_id; ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>Name <span class="text-danger">*</span></label>
                      <input type="text" name="name" class="form-control w-100" value="<?php echo $name;?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>Phone <span class="text-danger">*</span></label>
                      <input type="text" name="phone" class="form-control w-100" value="<?php echo $phone;?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>Address <span class="text-danger">*</span></label>
                      <input type="text" name="address" class="form-control w-100" value="<?php echo $address;?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button class="btn btn-success w-100" name="update_farmer">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>