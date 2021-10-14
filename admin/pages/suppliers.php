<?php ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Suppliers</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Supplier ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Crops</th>
                  <th class="tex">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php get_suppliers_admin(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>