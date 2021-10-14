<?php solve_complaint(); reject_complaint(); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Tips</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php get_tips_admin(); ?>
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
          <h4 class="card-title"> Add Tips</h4>
        </div>
        <div class="card-body">
          <form method="POST">
          	<div class="row">
          		<div class="col-12">
          			<div class="form-group">
          				<label>Title</label>
          				<input type="text" class="form-control" placeholder="Enter Title" name="title">
          			</div>
          		</div>
          		<div class="col-12">
          			<button class="btn btn-success w-100">Add</button>
          		</div>
          	</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>