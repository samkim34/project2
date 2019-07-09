<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">charge smartphone</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">charge</li>
            </ul>
          </div>
            
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Scan your card here</h3>
                    </div>
                    <div class="card-body">
                      <form method="post" action="<?=base_url('Users/allow_port');?>">
                        
                          <!-- notification -->
                          <div class="alert alert-danger alert-dismissible unregisteredCardDiv" style="display: none;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              This card is not registered 
                          </div>
                          
                          <div class="alert alert-danger alert-dismissible balance_error" style="display: none;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              Dear customer, you have insufficient balance.please your recharge card and try again!
                          </div>
                          
                        <div class="form-group">       
                          <label class="form-control-label">Card</label>
                          <input type="text" placeholder="scan your card here" name="cardNumber" id="cardId" class="form-control" autofocus>
                        </div>
                        <div class="form-group">       
                          <input type="reset" value="Cancel" class="btn btn-default">
                          <input type="submit" value="Open port" class="btn btn-primary" style="float: right;">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>