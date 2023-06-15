<!-- import profile handler script-->
<?php 
 include "profileHandler.php";
?>

<!DOCTYPE html>
<head>
<header>
       
<style>
    <?php 
    include "./styles/profile.css";
    ?>
</style>

</header>
<body class="profile-canvas">
      
  <form  method="post" class="logout-sec">
    <button class="logout-btn" name="logout"> Logout </button>
  </form>
 
     
 <div class="canvas-main-sec">
        
      <div class="user-head">
            
          <div class="user-icon-frame">
            <img src="data:image/png;base64,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" class="user-icon"/>
          </div>
          <p> <?php echo $userFirstName." ".$userLastName ?> </p>
        
           
      </div>

      <div>
           <div>
             <p>Email : <?php echo $userEmail ?></p>
           </div>

           <div>
             <p>Phone: <?php echo $userPhone ?> </p>
           </div>

      </div>
    

 </div>



</body>


</head>
