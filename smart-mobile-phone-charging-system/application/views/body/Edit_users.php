<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">customer info</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">edit</li>
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
                      <h3 class="h4">Edit customer info</h3>
                    </div>
                    
                    <div class="card-body">
                      <form class="form-horizontal" method="post" action="<?=base_url('Main/update_user_info');?>">
                        <!--<div class="line"></div>-->
                          
                          <?php
                          $user_id=$this->uri->segment(3);
                          $this->db->where('customer_id', $user_id);
                          $get_user_info=$this->db->get('customers');
                          foreach($get_user_info->result() as $userRow){
                              $fname=$userRow->firstname;
                              $lname=$userRow->lastname;
                              $phone=$userRow->phone_number;
                          }
                          ?>
                          <input type="hidden" name="userid" class="form-control" value="<?=$user_id;?>">
                          <div class="form-group row">
                          
                              <div class="col-sm-6">
                                  <label class="form-control-label">Firstname</label>
                                  <input type="text" placeholder="enter customer firstname" name="edit_fname" class="form-control" required value="<?=$fname;?>">
                              </div>
                              
                              <div class="col-sm-6">
                                  <label class="form-control-label">Lastname</label>
                                  <input type="text" placeholder="enter customer lastname" name="edit_lname" required class="form-control" value="<?=$lname;?>">
                              </div>
                        </div>
                        <!--<div class="line"></div>-->
                          
                          <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="form-control-label">Phone number</label>
                                <input type="number" placeholder="enter customer phone number" required name="edit_phone" class="form-control" value="<?=$phone;?>">
                              </div>
                          </div>
                        
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>