function ValidationEvent() {
    // Storing Field Values In Variables
    var name = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var contact = document.getElementById("contact").value;
    var country = document.getElementById("country").value;
    var city = document.getElementById("city").value;
    // Regular Expression For Email
    // let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var phoneReg="^\+(?:[0-9] ?){6,14}[0-9]$";
    let x = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
    // // Conditions
    if (username == '' || email == '' || contact == '' || country == '' ||  city == '') {
        alert('Fields cannot be empty') 
        function validateForm()                                 
        { 
            var name = document.forms["myForm"]["name"]; 
            var contact = document.forms["myForm"]["contact"]; 
            let x = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/
            let alpha = /^[a-zA-Z ]+$/;  
            if (name.value == "" ){ 
                document.getElementById('errorname').innerHTML="Please fill this field";  
                name.focus(); 
                return false; 
              }else if (contact.value== ""){
              
              document.getElementById('errorcontact').innerHTML="Please fill this field";  
                name.focus(); 
                return false; 

              }else if (!contact.value.match(x)){
              
              document.getElementById('errorcontact').innerHTML="Please enter a valid phone number";  
                name.focus(); 
                return false; 
              
            }else if (!name.value.match(alpha)){
              
              document.getElementById('errorname').innerHTML="Please enter a valid name";  
                name.focus(); 
                return false; 
            
            } else {
                document.getElementById('errorname').innerHTML="";  
            }
        }
   
        return false;
    }
    
    if(!contact.match(x)) {
        alert("Please enter a valid phone number");
        return false
    }

    
    // if (contact.length == 10) {
    // return true;
    // } else {
    // alert("The Contact No. must be at least 10 digit long!");
    // return false;
    // }                                     
    // } else {
    // alert("Please enter a valid phone number");
    // return false;
    // }
    // } else {
    // alert("Invalid Email Address...!!!");
    // return false;
    // }
    // } else {
    // alert("Please fill the blank fields");
    // return false;
    //  }

    return true
}