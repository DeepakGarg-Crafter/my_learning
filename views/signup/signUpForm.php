

       <!-- import validation script -->
       <?php include "registrationHandler.php";?>

<!DOCTYPE html>
<head>
    <header>

    <style>
    <?php
include "../../styles/signup.css";
?>
</style>
    </header>

<body>


   <div class="signUp-canvas" >

      <div class="signUp-form-sec" >

       <h2 class="signUp-heading"> Create an Account </h2>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-sec" >

          <div class="form-field-sec">
            <label> First Name : </label> <br>
            <input type="text" required name="firstName" class="form-inputs" placeholder="Doe" value="<?php echo $set_firstname; ?>" />
            <p class="input-field-error">  <?php echo $fnameErr; ?>  </p>
          </div>

          <div class="form-field-sec">
            <label> Last Name : </label> <br>
            <input type="text" required name="lastName" class="form-inputs" placeholder="John" value="<?php echo $set_lastname; ?>" />
            <p  class="input-field-error" >  <?php echo $lnameErr; ?> </p>
          </div>

          <div class="form-field-sec">
            <label> Phone : </label> <br>
            <input type="Number" required name="phone" class="form-inputs" placeholder="9898993933" value="<?php echo $set_phone; ?>" />
            <p  class="input-field-error" >  <?php echo $phoneErr; ?> </p>
          </div>

          <div class="form-field-sec">
            <label> Email : </label> <br>
            <input type="email" required name="email" class="form-inputs" placeholder="xyz@abc.com" value="<?php echo $set_email; ?>" />
            <p  class="input-field-error" >  <?php echo $emailErr; ?> </p>
          </div>

          <div class="form-field-sec">
            <label> Password : </label> <br>
            <input type="password" required name="password" class="form-inputs" placeholder="########" value="<?php echo $set_password; ?>" />
            <p  class="input-field-error" >  <?php echo $passwordErr; ?> </p>
          </div>

          <div class="form-field-sec">
            <label> Confirm Password : </label> <br>
            <input type="password" required name="cPassword" class="form-inputs" placeholder="########" value="<?php echo $set_cPassword; ?>" />
            <p  class="input-field-error" >  <?php echo $cPasswordErr; ?> </p>
          </div>


          <button type="submit" class="form-btn" name="registration" >Register Now</button>
      </form>

      <div class="have-acc">
        <p> Already have an Account ? <a href="/registration/views/login/loginForm.php"  style="text-decoration: none; color:blue">  Login Here </a> </p>
      </div>

      </div>
   </div>




</body>
</head>
