
<div class="card text-white bg-primary mb-10 col-12" >
  <div class="card-header"><h3>Your Information</h3></div>
  <div class="card-body">
    <h4 class="card-title">Last Name:</h4>
    <p class="card-text"><?php echo $_SESSION['lName'];  ?></p>

    <h4 class="card-title">First Name:</h4>
    <p class="card-text"><?php echo $_SESSION['fName'];  ?></p>

    <h4 class="card-title">Employee ID:</h4>
    <p class="card-text"><?php echo transform_userID($_SESSION['id']);  ?></p>

    <h4 class="card-title">Address:</h4>
    <p class="card-text">
      <address>
      <?php echo $_SESSION['street'];  ?>
      <br /><?php echo $_SESSION['city'].", "; echo $_SESSION['state']." "; echo $_SESSION['zip']; ?></address>
    </p>

    <h4 class="card-title">Email:</h4>
    <p class ="card-text"><?php echo  $_SESSION['email'];  ?></p>

    <h4 class = "card-title">Phone:</h4>
    <p class = "card-text"><?php echo  $_SESSION['phone'];  ?></p> 
  </div>
</div>



