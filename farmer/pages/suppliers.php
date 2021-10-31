<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Suppliers</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="DataTable">
              <thead class=" text-primary">
                <tr>
                  <th>Sr#</th>
                  <th>Supplier ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
                <?php  get_suppliers(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>