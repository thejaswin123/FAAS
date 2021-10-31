<?php add_complaint_farmer();?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Add Complaints</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>farmerID</th>
                  <th>Compliant</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php get_complaints_farmer(); ?>
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
          <h4 class="card-title"> Add Complaint</h4>
        </div>
        <div class="card-body">
          <form method="POST">
          	<div class="row">
          		<div class="col-4">
          			<div class="form-group">
          				<label>Supplier</label>
          				<select name="supplier" class="form-control">
          					<option value="">Select Supplier</option>
          					<?php generate_suppliers_dropdown();?>
          				</select>
          			</div>
          		</div>

          		<div class="col-8">
          			<div class="form-group">
          				<label>Complain</label>
          				<input type="text" class="form-control" name="complaint">
          			</div>
          		</div>

          		<div class="col-12">
          			<div class="form-group">
          				<button class="btn btn-success w-100" name="add_complaint">ADD</button>
          			</div>
          		</div>
          	</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>