<?php add_crop(); delete_crop(); #complete_order(); cancel_order(); add_review();?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Crops</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php get_crops_farmer(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Crops</h4>
        </div>
        <div class="card-body">
          <form method="POST">
          	<div class="row">
              

          		<div class="col-3">
          			<div class="form-group">
          				<label>Crop Name</label>
          				<input type="text" class="form-control" name="name">
          			</div>
          		</div>

          		<div class="col-3">
          			<div class="form-group">
          				<label>Quantity</label>
          				<input type="text" class="form-control" name="quantity">
          			</div>
          		</div>

                  <div class="col-3">
          			<div class="form-group">
          				<label>Price</label>
          				<input type="text" class="form-control" name="price">
          			</div>
          		</div>

          		<div class="col-12">
          			<div class="form-group">
          				<button class="btn btn-success w-100" name="add_crop">ADD</button>
          			</div>
          		</div>
          	</div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>