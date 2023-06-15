<!-- import login handler script -->
 <?php
require "loginFormhandler.php";
?> 

<!DOCTYPE html>
<head>

<header>

<style>
  <?php
include "../../styles/login.css";
?>
</style>

</header>

<body class="login-canvas">

<div class="login-sec">
         <h2 class="login-heading">Login Here</h2>

         <form method="post"  action=""  class="login-form" >

         <div class="form-field-sec" >
            <label> Email: </label> <br>
            <input type="email" required name="email" class="form-inputs" placeholder="xyz@abc.com" value="<?php echo $set_email; ?>" />
            <p  class="input-field-error" >  <?php echo $emailErr; ?> </p>
          </div>

          <div class="form-field-sec">
            <label> Password : </label> <br>
            <input type="password" required name="password" class="form-inputs" placeholder="########" value="<?php echo $set_password; ?>" />
            <p  class="input-field-error" >  <?php echo $passwordErr; ?> </p>
          </div>

          <button type="submit" name="login" class="form-btn" > Login </button>

         </form>

         <p class="dont-have-acc"> Don't have an Account? <a href = "/registration/views/signup/signUpForm.php" style="text-decoration: none; color:blue" > SignUp Here</a> </p>
</div>

</body>

</head>
