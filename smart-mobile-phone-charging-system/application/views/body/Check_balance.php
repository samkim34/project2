<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Account balance</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">balamce</li>
            </ul>
          </div>
            
    <?php
    $card_id=$this->uri->segment(3);
    if(!empty($card_id)){
        $this->db->where('card_id', $card_id);
        $user_data=$this->db->get('customers');
        foreach($user_data->result() as $user_data_row){
            $fname=$user_data_row->firstname;
            $lname=$user_data_row->lastname;
            $balance=$user_data_row->amount;
        }
    }
    ?>
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
                      <h3 class="h4">Scan your card here</h3>
                    </div>
                    <div class="card-body">
                      <form method="post" action="<?=base_url('Users/check_balance');?>">
                        
                          <!-- notification -->
                          <div class="alert alert-danger alert-dismissible unregistered_card_div" style="display: none;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              This card is not registered 
                          </div>
                          
                        <div class="form-group">       
                          <label class="form-control-label">Card</label>
                          <input type="text" placeholder="scan your card here" name="card_number" id="cardId" class="form-control" value="<?php if(!empty($card_id)){echo $card_id;}?>" <?php if(empty($card_id)){echo 'autofocus';}?>>
                        </div>
                        <div class="form-group">       
                          <input type="reset" value="Cancel" class="btn btn-default">
                          <input type="submit" value="Check balance" class="btn btn-primary" style="float: right;">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                    
                    <?php
                    if(!empty($card_id)){
                    ?>
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Account information</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Welcome <strong><?=$fname.' '.$lname;?></strong><br><hr/>
                            <small>
                                balance: <?='Tsh '.$balance;?>
                            </small>
                        </p>
                    </div>
                  </div>
                  <?php } ?>
                  
                </div>
              </div>
            </div>
          </section>