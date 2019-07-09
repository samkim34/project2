<!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>smart mobile phone charging system &copy;<?=date('Y');?></p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="javascript:void(0);" class="external">Kimambo</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
</div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?=base_url('assets');?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets');?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?=base_url('assets');?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="<?=base_url('assets');?>/js/charts-home.js"></script>
    <script src="<?=base_url('assets');?>/js/front.js"></script>

    <script>
        $(document).ready(function(){
            var unregistered_card='<?php if(!empty($register_card)){echo $register_card;}?>';
            var unregisteredCard='<?php if(!empty($registerCard)){echo $registerCard;}?>';
            var balance_error='<?php if(!empty($below_amount)){echo $below_amount;}?>';
            if(unregistered_card=='card_not_registered'){
                $('.unregistered_card_div').delay(100).slideDown();
                $('.unregistered_card_div').delay(3000).slideUp();
                $('#cardId').focus();
            }
            
            if(unregisteredCard=='cardNotRegistered'){
                $('.unregisteredCardDiv').delay(100).slideDown();
                $('.unregisteredCardDiv').delay(3000).slideUp();
                $('#cardId').focus();
            }
            
            if(balance_error=='inssufficient'){
                $('.balance_error').delay(100).slideDown();
                $('#cardId').focus();
            }
            
        });
    </script>
  </body>
</html>