<?php session_start() ?>
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
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

  <!-- Bootstrap Core CSS -->
  <link href="../css1/Template/bootstrap.min.css" rel="stylesheet">
  <link href='../css1/Template/main.css' rel='stylesheet'>
  <link href='../css1/Template/style.css' rel='stylesheet'>
  <link href='../css1/Template/responsive.css' rel='stylesheet'>
  <link rel="shortcut icon" href="../images/logo5.png">

  <script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

  <!-- JavaScripts -->
  <script src="../js/Template/modernizr.js"></script>

  <!-- Online Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type='text/css'>


  <style>


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body>

<?php 
  include_once('loginmenu.php');
  ?>
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info register">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-12">
                <h6>Please Register</h6>
                <p> This makes it easier the next time you are buying something
                  <br> * indicates required fields
                </p>

                <form action="../Actions/register_process.php" method="post">
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *FIRST NAME
                        <input type="text" name="fname" value="" placeholder="" required>
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *LAST NAME
                        <input type="text" name="lname" value="" placeholder="" required>
                      </label>
                    </li>
                    
                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *EMAIL ADDRESS
                        <input type="email" name="email" id="email"   placeholder="Enter a valid email" required pattern= "/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" title="Email must be in the required pattern">
                      </label>
                      <div id="emailmessage">
                        <p><b>Email must be of the following pattern</b></p>
                        <p id="pattern" class="invalid"><b>name@gmail.com</b> </p>
                    </div>
                    </li>
                    
                    <!-- Password -->
                    <li class="col-md-6">
                      <label> *PASSWORD
                      <input type="password" name="password" value="" id="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </label>
                      <div id="pswdmessage">
                        <p><b>Password must contain the following:</b></p>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    </li>
                  
                    <!-- Verify password -->
                    <li class="col-md-6">
                      <label> *ENTER PASSWORD AGAIN
                        <input type="password" name="vpswd" value="" id="vpswd" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </label>
                      <div id="vpswdmessage">
                        <p id="vpassword" class="invalid"><b>Password must be the same as the previously entered password</b></p>
                       
                    </div>
                    </li>
                    
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <button type="submit" class="btn" name="register">REGISTER</button>
                    </li>
                  </ul>
                </form>
                <?php
                    if (isset($_GET["error"]) && $_GET["error"]==1)
   							        echo ' <div class="alert alert-danger" role="alert"> Password entered do not match</div>' ;
                    if (isset($_GET["error"]) && $_GET["error"]==0)
   							        echo ' <div class="alert alert-danger" role="alert">Registration was unsucesssful. Try again later</div>' ;
                    if (isset($_GET["error"]) && $_GET["error"]==3)
                          echo ' <div class="alert alert-danger" role="alert">Email already exists in the system, please log in <br></div>' ;
                    ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   
  
  <?php include_once("footer.php") ?>
  
  
</div>
<script src="../js/Template/jquery-1.11.3.min.js"></script> 
<script src="../js/Template/bootstrap.min.js"></script> 
<script src="../js/Template/own-menu.js"></script> 
<script src="../js/Template/jquery.lighter.js"></script> 
<script src="../js/Template/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="../menu/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="../menu/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="../js/Template/main.js"></script> 
<script src="../js/Template/main.js"></script>
<script>
  
var myInput = document.getElementById("password");
var email = document.getElementById("email");
var vpswd = document.getElementById("vpswd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var pattern = document.getElementById("pattern");
var vpassword= document.getElementById("vpassword");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("pswdmessage").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("pswdmessage").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

//To check if the password reentered matches the one entered
// When the user clicks on the password field, show the message box
vpswd.onfocus = function() {
  document.getElementById("vpswdmessage").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
vpswd.onblur = function() {
  document.getElementById("vpswdmessage").style.display = "none";
}

// When the user starts to type something inside the password field
vpswd.onkeyup = function() {
  // Validate passwords are equal
  var enteredpassword = document.getElementById("password");
  if(myInput.value.match(enteredpassword)) {  
    vpassword.classList.remove("invalid");
    vpassword.classList.add("valid");
  } else {
    vpassword.classList.remove("valid");
    vpassword.classList.add("invalid");
  }
  
}


// When the user clicks on the email field, show the message box
email.onfocus = function() {
  document.getElementById("emailmessage").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
email.onblur = function() {
  document.getElementById("emailmessage").style.display = "none";
}

email.onkeyup = function() {
  // Validate lowercase letters
  var emailregex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  if(email.value.match(emailregex)) {  
    pattern.classList.remove("invalid");
    pattern.classList.add("valid");
  } else {
    pattern.classList.remove("valid");
    pattern.classList.add("invalid");
  }
  
 
}
</script>
</body>
</html>