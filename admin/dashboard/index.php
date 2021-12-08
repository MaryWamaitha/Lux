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
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
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
          <li class="nav-item  active ">
            <a class="nav-link  active " href="index.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link " href="add_products.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Add Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="view_products.php">
              <i class="ni ni-bullet-list-67 text-red"></i> View and Edit Products
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link " href="add_category.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Add Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="view_category.php">
              <i class="ni ni-bullet-list-67 text-red"></i> View and Edit Category
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
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Categories</a>
        <!-- Form -->
       
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../../images/logo5.png">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Lux Art Admin Panel</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              
              <div class="dropdown-divider"></div>
              <a href="../logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Orders</h5><br><br><br>
                      <span class="h2 font-weight-bold mb-0"><?php echo $orders['number']; ?></span><br><br><br>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                      <i class="fas fa-cart-arrow-down"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Products</h5><br><br><br>
                      <span class="h2 font-weight-bold mb-0"><?php echo $stocks['stocks']; ?></span><br><br><br>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="fab fa-product-hunt"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Customers</h5><br><br><br>
                      <span class="h2 font-weight-bold mb-0"><?php echo $customers['numbers']; ?></span><br><br><br>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5><br><br><br>
                      <span class="h2 font-weight-bold mb-0"><?php echo $sales['sales']; ?></span><br><br><br>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <i class="fas fa-chart-bar"></i>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
            <?php
                    if (isset($_GET["error"]) && $_GET["error"]==1)
                            echo ' <div class="alert alert-danger" role="alert"> The deletion was not succesful. Please try again</div>' ;
                
                    ?>
              <h3 class="text-white mb-0">Order Table</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">invoice No</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Customer Contact</th>
                    <th scope="col">Painting Name</th>
                    <th scope="col">Painting Size</th>
                    <th scope="col">Order Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php
		              	foreach($purchases as $x){
											$invoice_no = $x['invoice_no'];
                      $order_id = $x['order_id'];
                      $customer_name = $x['customer_Fname'];
                      $customer_email = $x['customer_email'];
                      $customer_contact= $x['customer_contact'];
                      $pid=$x['product_id'];
                      $productdetails=select_one_product_controller($pid);
                      $name= $productdetails['product_name'];
                      $size= $x['size'];
                      if ($size==1){
                        $price=1500;
                        $type='25*18';
                      }
                      elseif ($size==2){
                        $price=4000;
                        $type='36*24';
                      }
                      else{
                        $price=10000;
                        $type='4*3';
                      }
                      $status= $x['order_status'];
                      ?>
                      <tr>
                    <td>
                      <?php echo $invoice_no;?>
                    </td>
                    <td>
                      <?php echo $customer_name;?>
                    </td>
                    <td>
                      <?php echo $customer_email;?>
                    </td>
                    <td>
                      <?php echo $customer_contact;?>
                    </td>
                    <td>
                      <?php echo $name;?>
                    </td>
                    <td>
                      <?php echo $type;?>
                    </td>
                    <form action= "status_action.php" method ="get">
                    <td>
                      <?php echo $status;?>
                    </td>
                    <td>
                    <input class='form-control' type='hidden'  name='order_id' id='order_id' value=<?php echo $x['order_id']; ?> >
                    <label for="status">Status</label>
                        <select name="status" id="status" class="custom-select">
                        <option value="Half Paid">Half Paid</option> 
                        <option value="Fully Paid">Full paid</option>      
                        <option value="Started">Started</option>       
                        <option value="Completed">Completed</option>
                        <option value="Delivered">Delivered</option>
                  </select>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <button class="dropdown-item" name="editorder"> Update</button>
                          <a class="dropdown-item" href="admin_action.php?deleteOrderID=<?php echo $order_id;?>">Delete</a>
                        </div>
                      </div>
                    </td>
                    </form>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
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
         //Redirect to previous page
        
           
         header("Location: ../../index.php");
    }
} else{
    header("Location: ../../view/login.php");
}?>