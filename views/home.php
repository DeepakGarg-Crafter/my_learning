<!DOCTYPE html>
<head>
    <header>

    </header>
    <body>
        
     <?php
           
           // store cookie name
           $cookieName = "user_token";

           if(!isset($_COOKIE[$cookieName])){
                 
            // varify token value and provide data

            // show profile 
            include "profile/profilePage.php";

           }
           else{
            // show the login page
            include "login/loginForm.php";

           }

     ?>

         
    </body>
</head>