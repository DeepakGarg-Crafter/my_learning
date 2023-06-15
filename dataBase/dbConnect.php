<?php 
       
    $hostName = "localhost";
    $userName = "root ";
    $password = 'Craft@2017';

    $dbName = 'for_learning';


    // create a connection 
    $connect =  mysqli_connect($hostName,$userName, $password, $dbName);
    
    // check connection status
    if($connect){
        echo "Database Connected Successfully";
    }
    else{
        die("Database Could Not Connect");
    }
       
    
    // // import userSchema 
    // include "userSchema.php";
    
    // // create a table for users
    // if( $connect->query($createUsersTable) == True ){
    //     echo "User Table Created SuccessFully at Database";
    // }
    // else{
    //     die("Unable to create User Table at Database");
    // }

?>