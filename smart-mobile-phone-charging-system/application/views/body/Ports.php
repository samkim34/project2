<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Charging port</h2>
            </div>
          </header>
          
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                  <?php
                  $active_ports=4;
                  $start_port=1;
                  for($start_port; $start_port<=40; $start_port++){
                  ?>
                  <div class="col-lg-3 col-3" style="padding: 5px;">
                      <div class="statistic d-flex align-items-center bg-white has-shadow">
                        <div class="icon <?php if($active_ports==$start_port){echo 'bg-red';}else{echo 'bg-gray';}?>"><i class="fa fa-tasks"></i></div>
                          <div class="text"><a href="<?=base_url('Rasp/index');?>/<?=$start_port;?>" style="<?php if($active_ports==$start_port){echo 'pointer-events: none;';}?>"><strong><?=$start_port;?></strong><br><small>Port</small></a></div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                
                
              </div>
            </div>
          </section>
          <!-- Projects Section-->