<?php add_request(); delete_request(); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Requests</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Crop</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php get_requests_in_supplier(); ?>
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
          <h4 class="card-title"> Add Request</h4>
        </div>
        <div class="card-body">
          <form method="POST">
          	<div class="row">
          		<div class="col-6">
          			<div class="form-group">
          				<input type="text" name="name" class="form-control" placeholder="Crop Name">
          			</div>
          		</div>

          		<div class="col-6">
          			<div class="form-group">
          				<input type="text" class="form-control" name="price" placeholder="Price">
          			</div>
          		</div>

          		<div class="col-12">
          			<div class="form-group">
          				<textarea name="description" class="form-control" placeholder="Description"></textarea>
          			</div>
          		</div>

          		<div class="col-12">
          			<div class="form-group">
          				<button class="btn btn-success w-100" name="add_request">ADD</button>
          			</div>
          		</div>
          	</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>