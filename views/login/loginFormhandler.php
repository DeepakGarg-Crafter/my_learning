<?php 
    
    // create all form fields
    $email = $password = "";

    // create all error message of each field
    $emailErr = $passwordErr = "";

    // store the values of each field
    $set_email = $set_password = "";


    
  // check each input field value
if (isset($_POST["login"])) {

    // store data if some one post the form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // store values of each input
        
        $set_email = $email = $_POST["email"];
        $set_password = $password = $_POST["password"];
       
    }

    

    // check Email
    if (!preg_match($validEmail, $email)) {
        $emailErr = "Please Enter a valid Email";
    } else if ($email == "") {
        $emailErr = "Please Enter your Email";
    }

    // check Password
     if ($password == "") {
        $passwordErr = "Please Enter your Password";
    }

    

    // Now check all the errors : if no error then proceed to login 
    if ( $emailErr == "" && $passwordErr == "") {
          
         

        // Clear the form
         $set_email = $set_password =  "";

    }
  

}


?>

