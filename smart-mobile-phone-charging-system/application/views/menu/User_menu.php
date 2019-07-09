<body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Smart </span><strong>ChargingSystem</strong></div>
                  <div class="brand-text brand-small"><strong>SMPCS</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?=base_url('assets');?>/profile_pic/user1.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">users activities</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="<?=base_url('Users/index');?>"><i class="icon-home"></i>Home</a></li>
            <!--<li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-o"></i>Customer </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="<?//=base_url('Main/add_user');?>">Add new customer</a></li>
                <li><a href="<?//=base_url('Main/view_user');?>">View customer</a></li>
              </ul>
            </li>-->
            <li> <a href="<?=base_url('Users/charge_cm');?>"> <i class="fa fa-bolt"></i>Charge </a></li>
            <li> <a href="<?=base_url('Users/balance');?>"> <i class="fa fa-money"></i>Check balance </a></li>
            <!--<li> <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>-->
          </ul>
        </nav>