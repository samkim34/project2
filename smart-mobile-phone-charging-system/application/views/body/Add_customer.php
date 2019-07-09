<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Register new customer</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">register</li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Enter customer info</h3>
                    </div>
                      
                      <!-- notification -->
                      <div class="alert alert-success alert-dismissible add_customer_div" style="display: none;">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          Customer was registered successfully.  
                      </div>
                      
                      <div class="alert alert-danger alert-dismissible card_exist_div" style="display: none;">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <i class="fa fa-warning"></i> This card already registered, please register another card! 
                      </div>
                      
                    <div class="card-body">
                      <form class="form-horizontal" method="post" action="<?=base_url('Main/register_customer');?>">
                        <!--<div class="line"></div>-->
                          
                          <div class="form-group row">
                          
                              <div class="col-sm-6">
                                  <label class="form-control-label">Firstname</label>
                                  <input type="text" placeholder="enter customer firstname" name="fname" class="form-control" required value="<?=set_value('fname');?>">
                              </div>
                              
                              <div class="col-sm-6">
                                  <label class="form-control-label">Lastname</label>
                                  <input type="text" placeholder="enter customer lastname" name="lname" required class="form-control" value="<?=set_value('lname');?>">
                              </div>
                        </div>
                        <!--<div class="line"></div>-->
                          
                          <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="form-control-label">Phone number</label>
                                <input type="number" placeholder="enter customer phone number" required name="phone" class="form-control" value="<?=set_value('phone');?>">
                              </div>
                              
                              <div class="col-sm-6">
                                  <label class="form-control-label">Amount</label>
                                  <input type="number" placeholder="enter customer initial amount" required name="amount" value="<?=set_value('amount');?>" class="form-control">
                              </div>
                          </div>
                        
                        <!--<div class="line"></div>-->
                          <div class="form-group row">
                          <div class="col-sm-12">
                              <label class="form-control-label">Card ID</label>
                            <input type="text" placeholder="scan card" name="cardId" id="cardId" class="form-control" value="" required>
                          </div>
                        </div>
                    
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>