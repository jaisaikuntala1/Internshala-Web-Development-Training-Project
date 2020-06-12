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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>
    </head>
    <body>
        
        <?php
        include 'header.php';
        ?>
        
        <br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><strong>SIGN UP</strong></h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Password" required = "true" pattern=".{6,}">
                        </div>
                        
                        <div class="form-group">
                            <input type="number" class="form-control" name="contact" placeholder="Ph.No." required="true">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="true">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        
                    </form>
                </div>
            </div>
        </div>
        
        
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
               <?php
                       include 'footer.php';
                       ?>
        </nav>
            
        
        
</body>
</html>