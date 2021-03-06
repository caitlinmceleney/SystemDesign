
<?php
$currentURL = $_SERVER['REQUEST_URI']; 

?>

<!--
  The if-else statements can be less verbose, but this is much clearer to see what the php is doing.  If you find a way to condense it, please do, but this is working for now.

  <a class = 'nav-link' href = 'index.php'>Home</a>
-->

  <nav class = " container navbar bg-light">
      <ul class = "nav nav-pills">

          <li class = "nav-item" >
            <?php
              if( strpos($currentURL,"index")>0 ){
                echo "<a class = 'nav-link active' href = '../../../public/index.php'>Home</a>";
              }else{
                echo "<a class = 'nav-link' href = '/SystemDesign/SysDev/public/index.php'>Home</a>";
              }
            ?>
          </li>

          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"academics")>0){
                echo "<a class = 'nav-link active' href = '../../../public/academics.php'>Academics</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/academics.php'>Academics</a>";
              }
            ?>
          </li>

          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"campusLife")>0){
                echo "<a class = 'nav-link active' href = '../../../public/campusLife.php'>CampusLife</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/campusLife.php'>CampusLife</a>";
              }
            ?>
          </li>

          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"admissions")>0){
                echo "<a class = 'nav-link active' href = '../../../public/admissions.php'>Admissions</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/admissions.php'>Admissions</a>";
              }
            ?>
          </li>
          
          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"administration")>0){
                echo "<a class = 'nav-link active' href = '../../../public/administration.php'>Administration</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/administration.php'>Administration</a>";
              }
            ?>
          </li>

          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"history")>0){
                echo "<a class = 'nav-link active' href = '../../../public/history.php'>History</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/history.php'>History</a>";
              }
            ?>
          </li>


          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"contact")>0){
                echo "<a class = 'nav-link active' href = '../../../public/contact.php'>Contact Us</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/contact.php'>Contact Us</a>";
              }
            ?>
          </li>

<!--Here the nav "login/out" button changes depending on url.  The log out href can be changed to another page.-->
          <li class = "nav-item">
            <?php
              if(strpos($currentURL,"login")>0){
                echo "<a class = 'nav-link active' href = '../../../public/login.php'>Login</a>";
              }else if(strpos($currentURL,"userAreas")>0){
                echo "<a class = 'nav-link' target = '' href = '../../../public/loggedOut.php'> Logout</a>";
              }else{
                echo "<a class = 'nav-link' href = '../../../public/login.php'>Login</a>";
              }
            ?>
          </li>

          <?php
            if(isset($_SESSION['role']) && $_SESSION['role']=='faculty' && $currentURL != '/SystemDesign/SysDev/private/userAreas/faculty/index.php'){
              echo "<li class = 'nav-item'><a class = 'nav-link' href = 'index.php'><strong>&check;Back To Tools</strong></a></li>";
                //echo $currentURL;
            }
          ?>

      </ul>
  </nav>


<?php


?>


        