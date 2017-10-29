<?php session_start();
include 'php/config.php';
$dataBaseQuery = "SELECT * FROM comments";
$results = mysqli_query($connection ,$dataBaseQuery);
$h1 = array();
$ph = array();
while($row = mysqli_fetch_assoc($results))
{
    $title = $row['user_comment_heading'];
    array_push($h1, $title);
    $content = $row['user_comment'];
    array_push($ph, $content);
}
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fast Repairs | Testimonials</title>
    <!-- BOOTSTRAP 4 BATA SYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- SOMTHING I ADDED TO MESS AROUND WITH -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- CUSTOM STYLE SHEETS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#nav">
    <!-- THIS PAGE IS BUILD USING A BOOT STRAP FLEXT BOX -->
    <div class="container-fluid">
        <!-- BELOW THIS COMMENT IS THE NAVIGATION BAR FOR THIS CITE -->
        <div class="row" id="nav">
            <div class="col-md-12 my-3">
                <nav class="navbar navbar-expand-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                    <a class="navbar-brand" href="#">
              <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                  Fast Repairs LLC
            </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"><i class="fa fa-question-circle" aria-hidden="true"></i>About</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="services.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-handshake-o" aria-hidden="true"></i>Services</a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="services.php">Offered Services</a>
                                <a class="dropdown-item" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                                <a class="dropdown-item" href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                              </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#testimonials"><i class="fa fa-comment-o" aria-hidden="true"></i>
                    Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.php"><i class="fa fa-users" aria-hidden="true"></i>FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php"><i class="fa fa-envelope-open" aria-hidden="true"></i>Contact Us</a>
                            </li>
<?php
if (isset($_SESSION['user'])) {
echo <<<HTML
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-male" aria-hidden="true"></i>Welcome "$_SESSION[user]"!</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="php/logOut.php"><i class="fa fa-minus-square-o" aria-hidden="true"></i>Logout</a>
</div>
</li>
HTML;
}
?>
                        </ul>
                    </div>
                    <!-- END OF CLASS NAV BAR -->
                </nav>
                <!-- END OF NAVIGATION -->
            </div>
            <!-- ENDING COL DIV -->
        </div>
        <!-- ENDING ROW DIV (NAV)-->
        <!-- END OF NAVIGATION SECTION OF THE WEB PAGE -->
        <!-- BELOW THIS COMMMENT STARTS THE HEADER OF THE WEBSITE -->
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Testimonials</li>
                </ol>
            </div>
            <!-- END COL -->
        </div>
        <!-- END ROW (END BREADCRUMB) -->
        <!-- THIS IS THE PLAIN TEXT PORTION OF THE SITE BELLOW THIS COMMENT-->
        <div class="row my-5">
            <div class="col-md-5" id="about">
                <header>
                    <div class="text-center">
                        <h1>Check Out What People Have To Say</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <!-- END CLASS TEXT CENTER -->
                </header>
                <!-- END HEADER -->
            </div>
            <!-- END COL -->
            <div class="col-md-7 bg-primary mt-5 d-inline-block" id="blueBar">
            </div>
        </div>
        <!-- END ROW (HEADER)-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block px-4 py-4">
                        <h4 class="card-title"><?php echo($h1[0]); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">By Nick</h6>
                        <hr>
                        <p class="card-text"><?php echo($ph[0]); ?></p>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thumbs up</a>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-down" aria-hidden="true"></i>Thumbs down</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block px-4 py-4">
                        <h4 class="card-title"><?php echo($h1[1]); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">By Lisa</h6>
                        <hr>
                        <p class="card-text"><?php echo($ph[1]); ?></p>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thumbs up</a>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-down" aria-hidden="true"></i>Thumbs down</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-block px-4 py-4">
                        <h4 class="card-title"><?php echo($h1[2]); ?><</h4>
                        <h6 class="card-subtitle mb-2 text-muted">By John</h6>
                        <hr>
                        <p class="card-text"><?php echo($ph[2]); ?></p>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thumbs up</a>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-down" aria-hidden="true"></i>Thumbs down</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block px-4 py-4">
                        <h4 class="card-title"><?php echo($h1[3]); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">By Jerry</h6>
                        <hr>
                        <p class="card-text"><?php echo($ph[3]); ?></p>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thumbs up</a>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-down" aria-hidden="true"></i>Thumbs down</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block px-4 py-4">
                        <h4 class="card-title"><?php echo($h1[4]); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">By Lisa</h6>
                        <hr>
                        <p class="card-text"><?php echo($ph[4]); ?></p>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thumbs up</a>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-down" aria-hidden="true"></i>Thumbs down</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-block px-4 py-4">
                        <h4 class="card-title"><?php echo($h1[5]); ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">By Rowen</h6>
                        <hr>
                        <p class="card-text"><?php echo($ph[5]); ?></p>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Thumbs up</a>
                        <a href="#" class="card-link"><i class="fa fa-thumbs-down" aria-hidden="true"></i>Thumbs down</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-12">
                <footer class="float-right mx-3">
                    <p>Copyright &copy;2017 Fast Repairs Co. All Rights Reserved</p>
                </footer>
            </div>
            <!-- END COL -->
        </div>
        <!-- END ROW (FOOTER)-->
    </div>
    <!-- END CONTAINER FLUID (MAIN)-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>