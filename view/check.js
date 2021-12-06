 
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
    