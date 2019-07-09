<!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
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
    <script src="<?=base_url('assets');?>/js/front.js"></script>

    <script>
        $(document).ready(function(){
            var customer_updated='<?php if(isset($_REQUEST['updated'])){echo 'updated';}?>';
            
            if(customer_updated=='updated'){
                $('.user_updated_div').delay(100).slideDown();
                $('.user_updated_div').delay(1500).slideUp();
            }
        });
    </script>
  </body>
</html>