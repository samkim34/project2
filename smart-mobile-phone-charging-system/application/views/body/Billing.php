<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Customer billing</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">billing</li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Recharge customer</h3>
                    </div>
                    <div class="card-body">
                      <form method="post" action="<?=base_url('Main/recharge');?>">
                        <div class="form-group">
                          <label class="form-control-label">Card ID</label>
                          <input type="text" placeholder="scan card" name="card_id" class="form-control" style="pointer-events: none;" value="1213">
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Amount</label>
                          <input type="text" placeholder="enter amount" name="recharged_amount" class="form-control" autofocus>
                        </div>
                        <div class="form-group">       
                          <input type="reset" value="Cancel" class="btn btn-default">
                          <input type="submit" value="Recharge" class="btn btn-primary" style="float: right;">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Customer information</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Welcome <strong>name lastname</strong><br><hr/>
                            <small>
                                phone number: #<br>
                                balance: Tsh..
                            </small>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>