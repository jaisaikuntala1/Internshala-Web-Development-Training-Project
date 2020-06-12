<?php
require 'common.php'; 
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
    </head>
    <body>
        
   <?php
   include 'header.php';
   ?>
        
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>LOGIN</h4></div>
                        <div class="panel-body">
                            <div class="text-warning">
                                <p>Login to make a purchase</p>
                            </div>
                    <form method="POST" action="login_submit.php">
                      
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="password" placeholder="Password" required = "true" pattern=".{6,}">
                        </div>
                     
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Login</button>
                        
                    </form>
                            
                        </div>
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.php">Register</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="navbar-fixed-bottom">
            <?php
 include 'footer.php';
 ?>
            
        </nav>    
      
            
        
        
</body>
</html>