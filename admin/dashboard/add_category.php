<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php

require('../admin_controller.php');
// return array of all rows, or false (if it failed)


session_start(); 
if (isset($_SESSION['ID'] )) 
{
    if ($_SESSION['role'] == 1)
    {


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Lux Jade Collection Admin Dashboard
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <link rel="stylesheet" href="../../css1/style.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link href="../../css1/form/main.css" rel="stylesheet" media="all">

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="index.php">
        <img src="../../images/logo5.png" class="navbar-brand-img" alt="...">
      </a>
      
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.php">
                <img src="../../images/logo5.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link " href="./index.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
         
          <li class="nav-item active">
            <a class="nav-link active " href="add_category.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Add Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="view_category.php">
              <i class="ni ni-bullet-list-67 text-red"></i> View and Edit Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../../view/loggedindex.php">
            <i class="fas fa-users"></i> Customer View
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">
              <i class="ni ni-circle-08 text-pink"></i> Logout
            </a>
          </li>
        </ul>
        
        
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-secondary pb-8 pt-5 pt-md-8">
    

        
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
          </div>
                        
      <div class="page-wrapper bg-secondary ">
        
            <div class="card card-6">
                
                    <h5 class="title" style="color:black;">Add a Category</h5>
                    <p style >* marks required fields</p>
                
                <div class="card-body">
                
                    <form method="POST" action="../../Actions/category_action.php" enctype="multipart/form-data">
                       
                       <div class="form-row">
                          <div class="name">*Category Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="category" required>
                            </div>
                        </div>
                      </div>
                      
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" name="savecategory">Add Category</button>
                        </div>
                       </div>
               
                    </form>
                </div>
         
      </div>
  </div>
</div>
  
   


 
 
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="../../form/vendor/jquery/jquery.min.js"></script>


<!-- Main JS-->
<script src="../../js/form/global.js"></script>


  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>
</html>
<?php 
 } else{
         //Redirect to index page
         header("Location: ../../index.php");
    }
} else{
    header("Location: ../../view/login.php");
}?>