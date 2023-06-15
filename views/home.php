<!DOCTYPE html>
<head>
    <header>

    </header>
    <body>
        
     <?php
           
           // store cookie name
           $cookieName = "user_token";

           if(isset($_COOKIE[$cookieName])){
                 
            // varify token value and provide data

            // show profile 
            header("Location: http://localhost/my_learning/views/profile/profilePage.php");
             exit;

           }
           else{
            // show the login page
            header("Location: http://localhost/my_learning/views/login/loginForm.php/");
            exit;
           }

     ?>

         
    </body>
</head>