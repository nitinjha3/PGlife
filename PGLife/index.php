<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | PG Life</title>
  <?php
  include "includes/head_links.php";
  ?>

    <link href="css/homepage.css" rel="stylesheet" />
</head>
<body>
  <?php
  include "includes/header.php";
  ?>
  <div class="banner-container">
    <h2 class="white pb-3">Happiness per Square Foot</h2>

    <form id="search-form" action="property_list.php" method="GET">
      <div class="input-group city-search">
           <input type="text" name='city'  class="form-control input-city" placeholder="Enter your city to search for PGs"/>
           <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">
              <i class="fa fa-search"></i>
            </button>
           </div>
      </div>
    </form>
  </div>

  <div class="page-container">
    <h1 class="city-heading">
      Major Cities
    </h1>
    <div class="row">
      <div class="city-card-container col-md">
        <a href="property_list.php?city=Delhi">
          <div class="city-card rounded-circle">
            <img src="img/delhi.png" alt="" class="city-img" >
          </div>
        </a>
      </div>
      <div class="city-card-container col-md">
        <a href="property_list.php?city=Mumbai">
            <div class="city-card rounded-circle">
                <img src="img/mumbai.png" class="city-img" />
            </div>
        </a>
    </div>
    <div class="city-card-container col-md">
      <a href="property_list.php?city=Bengaluru">
          <div class="city-card rounded-circle">
              <img src="img/bangalore.png" class="city-img" />
          </div>
      </a>
  </div>
  <div class="city-card-container col-md">
    <a href="property_list.php?city=Hyderabad">
        <div class="city-card rounded-circle">
            <img src="img/hyderabad.png" class="city-img" />
        </div>
    </a>
</div>
</div>
</div>

<?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
    <script type="text/javascript" src="js\jquery.js"></script>
<script type="text/javascript" src="js\bootstrap.mim.js"></script>
<script type="text/javascript" src="js/common.js"></script>



</body>

</html>
