
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>Lux Jade Collection</title>


<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="../menu/rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../css1/Template/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href='../css1/Template/font-awesome.min.css' rel="stylesheet" type="text/css">

<link href='../css1/Template/main.css' rel='stylesheet'>
<link href='../css1/Template/style.css' rel='stylesheet'>
<link href='../css1/Template/responsive.css' rel='stylesheet'>
<link href='../css1/Template/ionicons.min.css' rel='stylesheet'>
<link rel="shortcut icon" href="../images/logo5.png">

<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<!-- JavaScripts -->
<script src="../js/Template/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type='text/css'>


<!-- Online Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


<!-- Online Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link href='http://fontawesome.io/icons/' rel='stylesheet' type='text/css'>
<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<body>
   <!-- header -->
  <header>
    <div class="sticky">
      <div class="container"> 
        
        <!-- Logo -->
        <div class="logo"> <a href="../index.php"><img class="img-responsive" src="../images/logo5.png" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>

          <!-- Form -->
        
          
           <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <li > <a href="../index.php">Home</a></li>
              <li> <a href="shop.php">Shop </a> </li>
              <li> <a href="contact.php"> contact</a> </li>
            </ul>
          </div>
          
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="user.php" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class='fas fa-user-circle'> </i>  </a>
                <ul class="dropdown-menu">
                  <li><a href="cart.php">MY CART</a></li>
                  <li><a href="user.php">ACCOUNT INFO</a></li>
                  <li><a href="../Actions/logout.php">LOG OUT</a></li>
                </ul>
             
                <li><p><?php echo $_SESSION["name"]; ?> </p> </li>
                    <!-- USER BASKET -->
                    <li class="dropdown user-basket"> <a href="cart.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fas fa-shopping-cart"></i> </a>
                      <ul class="dropdown-menu">
                        <li>
                        
                        <li class="margin-0">
                          <div class="row">
                            <div class="col-xs-6"> <a href="cart.php" class="btn" >VIEW CART</a></div>
                            <div class="col-xs-6 "> <a href="checkout.php" class="btn" >CHECK OUT</a></div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li > <a href="../Actions/logout.php"><i class="fas fa-sign-out-alt"></i></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  
  
  

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../js/Template/bootstrap.min.js"></script> 
<script src="../js/Template/own-menu.js"></script> 
<script src="../js/Template/jquery.lighter.js"></script> 
<script src="../js/Template/owl.carousel.min.js"></script> 
<script src="../js/Template/main.js"></script> 
<script src="../js/Template/main.js"></script>
</body>
</html>