<?php

require_once('private/init.php');
include('inc/header.php');

?>
<style type="text/css">
  .spacing{height: 30px;}
</style>

<body id="page-top">

<!-- start wrapper -->
<div id="wrapper">

<!-- SIDEBAR -->
  <?php include('inc/sidebar.php');?>  
<!-- END SIDEBAR -->

<!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
    <div id="content">
<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

 <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

<!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

<!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
<!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

<!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
<!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

         </ul>

        </nav>
<!-- End of Topbar -->

<!-- container -->

    <div class="container" style="max-width: 100%;">
      <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="text-center">                   
                      <img style="border-radius: 50%;margin-top:30px;margin-bottom: 10px;" src="https://source.unsplash.com/QAB-WJcbgJk/300x300">
                      <h1>FULL NAME</h1>
                    <div class="bio" style="margin: 20px;">
                      <p>Lorem ipsum keme keme keme 48 years nakakalurky kasi fayatollah kumenis at bakit ang at bakit shonga keme keme kasi shonget na keme keme chapter bella jowabelles na ang klapeypey-klapeypey thunder nakakalurky shogal mabaho waz sa at ng Cholo shonget at nang na bella jongoloids kasi kasi juts chaka kasi bonggakea nang nang kirara biway kasi tanders Mike neuro at nang ano shontis at bakit.</p>
                    </div>
                </div>

              <div class="details">
                <div class="container">
                  <div class="row">
                    <div class="col-md">
                     Email: <input type="text" name="" class="form-control edge-corner" style="border:none;border-color: transparent;">
                    </div>
                    <div class="col-md">
                     Contact: <input type="text" name="" class="form-control edge-corner" style="border:none;border-color: transparent;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="spacing"></div>
        </div>
      </div>
    </div>


<!-- container -->

    </div>
<!-- END MAIN CONTENT -->
<!-- FOOTER -->
 <?php include('inc/footer.php');?> 
 <!-- END FOOTER -->


</div>
<!-- END CONTENT WRAPPER -->

</div>
<!-- end wrapper -->


</body>
</html>