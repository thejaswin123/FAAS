<?php solve_complaint(); reject_complaint(); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Complaints</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Title</th>
                  <th>FarmerID</th>
                  <th>SupplierID</th>
                  <th>Complaint</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php get_complaints_admin(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>