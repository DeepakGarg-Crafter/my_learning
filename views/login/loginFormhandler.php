<?php 
    
    // create all form fields
    $email = $password = "";

    // create all error message of each field
    $emailErr = $passwordErr = "";

    // store the values of each field
    $set_email = $set_password = "";
   
     // validation pattern
    $validEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

    
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
          
         // connect to Database
         include "../../dataBase/dbConnect.php";
                
         // check is user already exist or not
         $searchQuery = "SELECT email,password FROM users WHERE email='$email'";
         
         $isUserExist = $mysqli->query($searchQuery);
         

         if($isUserExist->num_rows == 0){
             echo " User Does Not Exist";
             die();
         }

         $userData = $isUserExist->fetch_assoc();
       
         $hashedPass = $userData["password"];

          //  compair password
         if(password_verify($password,$hashedPass)){
             
             

            // generate a unique id
            $unique_id = uniqid();

            // generate a encoded token
            $token = md5($unique_id.$email);

           
          
            // store token into database
                $updateQuery = "UPDATE users SET token='$token' WHERE email='$email'";
               
                // add token to db
                if($mysqli->query($updateQuery)==TRUE){
                    
                    // echo "Token added successfully";

                    // create a cookie and set its data
                    setcookie("user_token",$token,time()+86400,"/");

                    // Clear the form
                     $set_email = $set_password =  "";

                    // redirect to profile page
                    header("Location: http://localhost/my_learning/index.php");
                    exit;

                    
                }else{
                    echo "Could not add token to DB";
                }
            

             
         }

         echo " Invalid Credentials ";

       

    }
  

}


?>

