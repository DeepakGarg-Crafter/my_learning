<?php 
  
    
  // is user try to logut
  if(isset($_POST["logout"])){
       
    // cookie name
    $cookiename = "user_token";

    setcookie($cookiename, "",time()-5000);
      
    header("Location: http://localhost/registration/");
    exit;
    
  }
   
  // create user details field to store values
  $userFirstName ="firstName"; $userLastName = "lastName";$userEmail ="userEmail"; $userPhone ="userPhone";
  
  if(isset($_COOKIE["user_token"])){

  // get cookie value
  $token = $_COOKIE["user_token"];
  
  
  }

 

?>