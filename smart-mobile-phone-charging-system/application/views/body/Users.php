<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Registered customers</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">customers</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                
                  <?php
                  $get_customers=$this->db->get('customers');
                  //count users
                  $count_users=$get_customers->num_rows();
                  if($count_users!=0){
                  ?>
                  
                <div class="col-lg-12">
                    <!-- notification -->
                      <div class="alert alert-success alert-dismissible user_updated_div" style="display: none;">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <i class="fa fa-check"></i> Customer info was updated successfully!
                      </div>
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Compact Table</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone number</th>
                            <th>Amount</th>
                            <th>Card number</th>
                            <th>Date registered</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            $s_n=1;
                            foreach($get_customers->result() as $user_row){
                            ?>
                          <tr>
                            <th scope="row"><?=$s_n++;?></th>
                            <td><?=$user_row->firstname;?></td>
                            <td><?=$user_row->lastname;?></td>
                            <td><?=$user_row->phone_number;?></td>
                            <td><?=$user_row->amount;?></td>
                            <td><?=$user_row->card_id;?></td>
                            <td><?=$user_row->date_registered;?></td>
                              <td>
                                  <?php
                                    $user_status=$user_row->status;
                                    echo $user_status;
                                  ?>
                              </td>
                              <td>
                                  <a href="<?=base_url('Main/edit_user');?>/<?=$user_row->customer_id;?>" class="btn btn-info" style="padding: 0;">edit</a>
                                  <a href="#" class="btn btn-danger" style="padding: 0;">delete</a>
                                  <a href="#" class="btn btn-warning" style="padding: 0;">block</a>
                                  <a href="#" class="btn btn-success" style="padding: 0;">recharge</a>
                              </td>
                          </tr>
                            <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                  <?php
                  }else{
                  ?>
                  <!-- if no user registered .start -->
                  <div class="row">
                      <div class="col-md-12">
                        <h3>no customers registered</h3>
                      </div>
                  </div>
                  <!-- if no user registered .end -->
                  <?php } ?>
                  
              </div>
            </div>
          </section>