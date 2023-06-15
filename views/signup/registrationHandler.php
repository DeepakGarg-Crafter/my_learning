<?php

// create all the fields to store values
$firstName = $lastName = $phone = $email = $password = $cPassword = "";

// create error mess with repect to each field
$fnameErr = $lnameErr = $phoneErr = $emailErr = $passwordErr = $cPasswordErr = "";

// store initial values of form
$set_firstname = $set_lastname = $set_phone = $set_email = $set_password = $set_cPassword = "";

// create all validation Pattern for Regular Expression
$validName = "/^[a-zA-Z ]*$/";
$validEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
$validPhone = "/^\d{10,10}$/";
$minEightPassword = "/.{8,}/";

// check each input field value
if (isset($_POST["registration"])) {

    // store data if some one post the form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // store values of each input
        $set_firstname = $firstName = $_POST["firstName"];
        $set_lastname = $lastName = $_POST["lastName"];
        $set_phone = $phone = $_POST["phone"];
        $set_email = $email = $_POST["email"];
        $set_password = $password = $_POST["password"];
        $set_cPassword = $cPassword = $_POST["cPassword"];
    }

    // check First Name
    if (!preg_match($validName, $firstName)) {
        $fnameErr = "Enter a valid name";
    } else if (empty($firstName)) {
        $fnameErr = "Please Enter your First Name";
    }

    // check Last Name
    if (!preg_match($validName, $lastName)) {
        $lnameErr = "Enter a valid name";
    } else if ($lastName == "") {
        $lnameErr = "Please Enter your Last Name";
    }

    // check Phone Number
    if (!preg_match($validPhone, $phone)) {
        $phoneErr = "Enter a valid Number";
    } else if ($phone == "") {
        $phoneErr = "Please Enter your Phone Number";
    }

    // check Email
    if (!preg_match($validEmail, $email)) {
        $emailErr = "Please Enter a valid Email";
    } else if ($email == "") {
        $emailErr = "Please Enter your Email";
    }

    // check Password
    if (!preg_match($minEightPassword, $password)) {
        $passwordErr = "Password must be atleast 8 character";
    } else if ($password == "") {
        $passwordErr = "Please Enter your Password";
    }

    // check Confirm Password
    if ($cPassword != $password) {
        $cPasswordErr = "Password did't match";
    } else if ($cPassword == "") {
        $cPasswordErr = "Please re-enter your Password";
    }

    // Now check all the errors : if no error then save data into dp
    if ($fnameErr == "" && $lnameErr == "" && $emailErr == "" && $phoneErr == "" && $passwordErr == "" && $cPasswordErr == "") {
          
          // create slat 
          $options=[
            'salt' => "43t8q904t42io023j23",
          ];
        
          // hash the password
          $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

           // Now we can add data into Database 
             
             $formatData = "INSERT INTO users(firstName,lastName,phone,email,password)
                            VALUES ($firstName,$lastName,$phone,$email,$hashPassword)"; 
            
            // // connect with database
            // include "dbConnect.php";
             
            // // check insertion status
            // if( $connect->query($formatData) == True ){
            //     echo "Account Created Successfully";
            // }
            // else{    
            //     echo "Unable to Create Account";
            // }
         

        // Clear the form
        $set_firstname = $set_lastname = $set_phone = $set_email = $set_password = $set_cPassword = "";

    }

}
