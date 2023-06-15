<?php 
       
    // $hostName = "localhost";
    // $userName = "root";
    // $password = 'Craft@2017';

    // $dbName = 'for_learning';


    // // create a connection 
    // $connect =  mysqli_connect($hostName,$userName, $password, $dbName);
    
    // // check connection status
    // if($connect){
    //     echo "Database Connected Successfully";
    // }
    // else{
    //     die("Database Could Not Connect");
    // }
       
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = 'Craft@2017';

    $dbname = 'for_learning';

        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
        if($mysqli->connect_errno ) {
           printf("Connect failed: %s<br />", $mysqli->connect_error);
           exit();
        }
        // printf('Connected successfully.<br />');
             

    
?>