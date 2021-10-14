<?php ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Farmers</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Farmer ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Crops</th>
                  <th class="tex">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php get_farmers_admin(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>