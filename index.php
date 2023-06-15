

 <!-- making the routing -->

<?php  
  $request = $_SERVER['REQUEST_URI'];
  $viewDir = '/views/';

  switch ($request) {
      case '/registration/':
          require __DIR__ . $viewDir . 'home.php';
          break;
  
      case '/registration/login':
          require __DIR__ . $viewDir . 'login/loginForm.php';
          break;
  
      case '/registration/signup':
          require __DIR__ . $viewDir . 'signup/signUpForm.php';
          break;

      case '/registration/profile':
            require __DIR__ . $viewDir . 'profile/profilePage.php';
            break;
  
  }
?>

