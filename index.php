 <!-- connect to Database -->
  <?php 
   include "./dataBase/dbConnect.php";
  ?>
 <!-- making the routing -->

<?php  
    
           

  $request = $_SERVER['REQUEST_URI'];
  $viewDir = '/views/';
  
  $app_url = "/my_learning/index.php";

  switch ($request) {
      case $app_url:
          require __DIR__ . $viewDir . 'home.php';
          break;
  
      case $app_url.'login':
          require __DIR__ . $viewDir . 'login/loginForm.php';
          break;
  
      case  $app_url.'signup':
          require __DIR__ . $viewDir . 'signup/signUpForm.php';
          break;

      case  $app_url.'profile':
            require __DIR__ . $viewDir . 'profile/profilePage.php';
            break;
  
  }
?>
 
