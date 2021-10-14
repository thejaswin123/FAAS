<div class="content">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-single-02 text-warning"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Farmers</p>
                <p class="card-title"><?php echo count_as_total("farmers",""); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <a href="index.php?page=farmers"><i class="fa fa-list"></i> View  </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-single-02 text-success"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Supliers</p>
                    <p class="card-title"><?php echo count_as_total("suppliers",""); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <a href="index.php?page=suppliers"><i class="fa fa-list"></i> View  </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-paper text-danger"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Total Crops</p>
                        <p class="card-title"><?php echo sum_as_total("crops","","quantity"); ?>kg</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer ">
                      <hr>
                      <div class="stats">
                        <a href="index.php?page=crops"><i class="fa fa-list"></i> View  </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-body ">
                      <div class="row">
                        <div class="col-5 col-md-4">
                          <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-paper text-primary"></i>
                          </div>
                        </div>
                        <div class="col-7 col-md-8">
                          <div class="numbers">
                            <p class="card-category"><small>Purchased Crops</small></p>
                            <p class="card-title"><?php echo sum_as_total("crop_purchased","","quantity"); ?>kg</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer ">
                          <hr>
                          <div class="stats">
                            <a href="index.php?page=crop_purchased"><i class="fa fa-list"></i> View  </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>