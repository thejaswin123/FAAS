<?php order_crops(); #complete_order(); cancel_order(); add_review();?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Order Crop</h4>
        </div>
        <div class="card-body">
        	<form method="POST">
        		<div class="row">
        			<div class="col-6">
        				<div class="form-group">
        					<label>Quantity</label>
        					<input type="number" name="quantity" class="form-control" required>
        				</div>
        			</div>
        			<div class="col-6">
        				<div class="form-group">
        					<label>Price (Per kg)</label>
        					<input type="number" name="price" class="form-control" required>
        				</div>
        			</div>
        			<div class="col-12">
        				<div class="form-group">
        					<label>Order Details</label>
        					<textarea name="details" class="form-control" required></textarea>
        				</div>
        			</div>
        			<div class="col-12">
        				<button class="btn btn-success w-100" name="order_crop">ORDER</button>
        			</div>
        		</div>
        	</form>
        </div>
      </div>
    </div>
  </div>
</div>