<?php 
  
     
    // cookie name
    $cookiename = "user_token";
    
  // is user try to logut
  if(isset($_POST["logout"])){
    

    setcookie($cookiename, "",time()-5000,"/");
      
    header("Location: http://localhost/my_learning/views/login/loginForm.php");
    exit;
    
  }
  
  // connect to db
  include "../../dataBase/dbConnect.php";

  
   
  // create user details field to store values
  $userFirstName ="firstName"; $userLastName = "lastName";$userEmail ="userEmail"; $userPhone ="userPhone";
  
  // if user is valid
  if(isset($_COOKIE[$cookiename])){

  // get cookie value
  $token = $_COOKIE[$cookiename];
  
  
  
    // search user into db based on token value
    $searchQuery = "SELECT * FROM users WHERE token='$token'";

  // get user details
  $userDetails = $mysqli->query($searchQuery);

  // check is user find or not
     if($userDetails->num_rows == 0){
       // user did not find, make it to login
          
       // delete the cookie
       setcookie($cookiename, "",time()-5000,"/");

       // redirect to login page
       header("Location: http://localhost/my_learning/views/login/loginForm.php");
       exit;
     } 
      
    // user founded in db

    $userData = $userDetails->fetch_assoc();

    // set user details to show
    $userFirstName =$userData["firstName"];
    $userLastName = $userData["lastName"];
    $userEmail =$userData["email"]; 
    $userPhone =$userData["phone"];    


  
  }

 
  // is user try to delete its account
  if(isset($_POST["account_delete"])){
    
    $token = $_COOKIE[$cookiename];

    // delete query
    $deleteQuery = "DELETE FROM users WHERE token='$token'";
    
    // delete from db
    if($mysqli->query($deleteQuery)){
      echo "user deleted Successfully";

      setcookie($cookiename, "",time()-5000,"/");
      
      header("Location: http://localhost/my_learning/views/signup/signUpForm.php");
      exit;
    }
    else{
      echo "Could not Delete User Account";
    }
   
    
  }

?>