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
$purchases = select_all_orders_controller();
$orders = select_count_orders_controller();
$customers = select_count_customers_controller();
$sales = select_count_sales_controller();
$stocks = select_count_products_controller(); 
$categories = select_all_categories_controller();

session_start(); 

?>

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

    <style>
        body {
            margin: 1 0%;
            text-align: left;
        }

        h3 {
            text-align: center;
        }
    </style>
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
                <img src="./assets/img/brand/blue.png">
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
            <a class="nav-link active " href="add_products.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Add Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="view_products.php">
              <i class="ni ni-bullet-list-67 text-red"></i> View and Edit Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../../index.php">
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
                        
          <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h5 class="title">Upload a Painting to website</h5>
                    <p style >* marks required fields</p>
                </div>
                <div class="card-body">
                
                    <form method="POST" action="../../Actions/product_action.php" enctype="multipart/form-data">
                       
                        <div class="form-row">
                            <div class="name">*Painting Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">*Painting Price in Ksh</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="price" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">*Category</div>
                            <div class="value">
                                <div class="input-group">
                                <?php
                                  //Loops through database array and prints categories name from the records in the database in a select
                                   echo "<select name ='category' class='input--style-6' required >
                                          <option>Select product Category</option>";

                                      foreach($categories as $x){
                                      
                                          echo "<option value =$x[cat_id]>$x[cat_name] </option>";
                                          }

                                      echo '</select>'; ?>
                                      <br>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Painting Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="desc" placeholder="More details about the painting eg Motivation, best scenario to use it"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload an image of the painting</div>
                            <div class="value">
                            <label for="image">Please upload product image.  </label><br>
                              <input class="input100" type="file" name="fileToUpload" id="fileToUpload" required>
                              <br>
                              
                                </div>
                                <div class="label--desc">Please note that image cannot be greter than 12MB</div>
                           
                        </div>
                        <div class="card-footer">
                          <button class="btn btn--radius-2 btn--blue-2" type="submit" name="saveproduct">Add product</button>
                        </div>
                      </form>
                </div>
                <?php
                    if (isset($_GET["error"]) && $_GET["error"]==0)
                        echo ' <div class="alert alert-danger" role="alert"> The uploaded item is not an image, please select an image</div>' ;
                    if (isset($_GET["error"]) && $_GET["error"]==1)
   						        	echo ' <div class="alert alert-danger" role="alert">The uploaded image is already in use for another product. Please select another image</div>' ;
				          	if (isset($_GET["error"]) && $_GET["error"]==2)
   						          echo ' <div class="alert alert-danger" role="alert"> Uploaded image size cannot be greater than 5 MB<br></div>' ;
                    if (isset($_GET["error"]) && $_GET["error"]==3)
   						          echo ' <div class="alert alert-danger" role="alert"> Only .jpg, .jpeg, GIF and .png file types are allowed for the product image<br></div>' ;
                    if (isset($_GET["error"]) && $_GET["error"]==4)
   						         echo ' <div class="alert alert-danger" role="alert">   Product addition to database failed, please try again<br></div>' ;
                    if (isset($_GET["error"]) && $_GET["error"]==5)
   						          echo ' <div class="alert alert-danger" role="alert">There was an error uploading product image to database, please try again<br></div>' ;
				        ?>
          </div>
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