<!DOCTYPE html>

<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {   header('location: products.php'); } 
 ?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lifestyle Store</title>
    
  </head>
  <body>
    <?php
     include 'header.php';
     ?>
      
          <div id="banner-image">
              <div class="container">
                  <center>
                      <div id="banner-content">
                      <h1>We sell lifestyle.</h1>
                      <p>Flat 40% offer on premium brands</p>
                      <a class="btn btn-danger btn-lg active" href="products.php">
                          Shop Now
                      </a>
                  </div>
                  </center>
              </div>
              
          </div>
      
      <div><br><br></div>
      
      <div class="container">
          <div class="row">
              <div class="col-xs-4">
                  <div class="thumbnail">
                      <img src="img/camera.jpg" alt="responsive image">
                      <div class="caption">
                          <center>
                              <h3>Cameras</h3>
                          <p>Choose among the best available in the world.</p>
                          </center>
                      </div>
                  </div>
              </div>
              
              <div class="col-xs-4">
                  <div class="thumbnail">
                      <img src="img/watch.jpg" alt="responsive image">
                      <div class="caption">
                          <center>
                              <h3>Watches</h3>
                          <p>Original watches from the best brand.</p>
                          </center>
                      </div>
                  </div>
              </div>
              
              <div class="col-xs-4">
                  <div class="thumbnail">
                      <img src="img/shirt.jpg" alt="responsive image">
                      <div class="caption">
                          <center>
                              <h3>Shirts</h3>
                          <p>Our exquisite collection of shirts.</p>
                          </center>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div><br><br></div>
      
      
     <?php
    include 'footer.php';
    ?>
      
      
      
  </body>
</html>