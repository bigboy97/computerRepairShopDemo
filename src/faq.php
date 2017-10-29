<?php session_start();
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fast Repairs | FAQ</title>
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
                            <li class="nav-item">
                                <a class="nav-link" href="testimonials.php"><i class="fa fa-comment-o" aria-hidden="true"></i>
                    Testimonials</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#faq"><i class="fa fa-users" aria-hidden="true"></i>FAQ</a>
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">FAQ</li>
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
                        <h1>Have A Quesiton? We have an answer!</h1>
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
            <div class="col-md-12">
                <div class="panel-group" id="faqAccordion">
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle question-toggle collapsed border border-primary rounded mb-4" data-toggle="collapse"
                            data-parent="#faqAccordion" data-target="#question0">
                            <h4 class="panel-title">
                                <a href="#" class="ing">Q: What is Lorem Ipsum?</a>
                            </h4>

                        </div>
                        <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to make a type specimen book. It has survived not only five <a href="http://jquery2dotnet.com/"
                                        class="label label-success">http://jquery2dotnet.com/</a> centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle border border-primary rounded mb-4" data-toggle="collapse"
                            data-parent="#faqAccordion" data-target="#question1">
                            <h4 class="panel-title">
                                <a href="#" class="ing">Q: Why do we use it?</a>
                            </h4>

                        </div>
                        <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here, content here', making
                                    it look like readable English. Many desktop publishing packages and web page editors now
                                    use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                    many web sites still in their infancy. Various versions have evolved over the years, sometimes
                                    by accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle border border-primary rounded mb-4" data-toggle="collapse"
                            data-parent="#faqAccordion" data-target="#question2">
                            <h4 class="panel-title">
                                <a href="#" class="ing">Q: Where does it come from?</a>
                            </h4>

                        </div>
                        <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                    a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                    Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                                    word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                    Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during
                                    the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from
                                    a line in section 1.10.32.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle border border-primary rounded mb-4" data-toggle="collapse"
                            data-parent="#faqAccordion" data-target="#question3">
                            <h4 class="panel-title">
                                <a href="#" class="ing">Q: Where can I get some?</a>
                            </h4>

                        </div>
                        <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing hidden in the middle of text. </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/panel-group-->
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