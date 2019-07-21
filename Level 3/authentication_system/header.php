<!--
-Written By: Francis Eseko
-->
<?php
    session_start();
?>  
<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="PHP, MySQL, sign up">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--Extra styling for making example understandable-->
        <link rel="stylesheet" href="css/example.css">

        <title>Sample login and signup system via PHP and SQL</title>
    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img class="logo" src="images/GooglePlay-Icon.png" alt="logo" class="img-responsive">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Contact Us</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Contact 1</a>
                                    <a class="dropdown-item" href="#">Contact 2</a>
                                    <a class="dropdown-item" href="#">Contact 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Special Contact</a>
                                </div>
                            </li>
                        </ul>
                        <div class="justify-content-end">
                            <?php
                                //if logged in, display only logout button, otherwise, display login form and signup button link
                                if (isset($_SESSION['userId'])){
                                    echo '<form class="form-inline my-lg-0">
                                    <a class="btn btn-primary my-sm-0" href="includes/logout-inc.php">Log out</a>
                                    </form>';
                                    /*echo '<form class="form-inline my-lg-0" action="includes/logout-inc.php" method="post">
                                    <button type="submit" name="logout-submit" class="btn btn-primary my-sm-0">Logout</button>
                                    </form>'; */
                                }
                                else{
                                    echo '<form class="form-inline my-lg-0" action="includes/login-inc.php" method="post">
                                    <div class="form-group">
                                    <input type="text" name="mailuid" placeholder="Username/E-mail" class="form-control">
                                    <input type="password" name="pwd" placeholder="Password" class="form-control">
                                    </div>
                                    <button type="submit" name="login-submit" class="btn btn-danger">Login</button>
                                    <form class="form-inline my-lg-0" action="includes/signup-redirect-inc.php" method="post">
                                    <div class="form-group">
                                    <a class="btn btn-default" href="signup.php">Sign Up</a>
                                    </form>';
                                }
                            ?>
                        </div>
                    </div>
                    
                </div>
            </nav>
        </header>