<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Science,Technology,Future,Advance">
        <meta name="author" content="Matthew Gordon">

        <title>What's Ahead: Future Technology &amp; Science</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!--  JQuery Ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Angular JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar">
            <div class="logo">
                <a href="home.php"><p>Welcome to What's Ahead</p></a>
            </div>
            <div class="" id="">
                <ul class="menu">
                    <li><a href="article.html">Articles</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="subscribe.php">Subscribe</a></li>
                    <li><a href="mailto:mfg209@aol.com">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- End Navigation -->

        <!-- Hero -->
        <header class="titleContact"></header>
        <!-- End Hero -->

        <!-- Main Content -->
        <div class="container">
            <!-- Row -->
            <div class="row">

                <!-- Contacter -->
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <!-- Contacting -->
                    <div class="contacting">

                        <div class="commentOfComment">
                            <p>Please Feel Free To Comment, Tell Us How The Site Can Improve, Or Just To Get In Touch<p>
                        </div>
                        <?php 
                            $action=$_REQUEST['action']; 
                            if ($action=="")    /* display the contact form */ 
                            { 
                        ?> 
                            <form id="contact_form" action="" method="POST" onsubmit="return validateForm();" enctype="multipart/form-data" class="col-md-4 formContact">
                                <h3 class="text-center">Ease of Contact</h3>
                                <div class="row">
                                    <input type="hidden" name="action" value="submit"> 
                                    <label class="required" for="name">Your name:</label><br />
                                    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                                    <span id="name_validation" class="error"></span>
                                </div>
                                <div class="row">
                                    <label class="required" for="email">Your email:</label><br />
                                    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
                                    <span id="email_validation" class="error"></span>
                                </div>
                                <div class="row">
                                    <label class="required" for="message">Your message:</label><br />
                                    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                                    <span id="message_validation" class="error"></span>
                                </div>
                                <input class="submit" href="mailto:mfg209@aol.com" value="Send email" />
                            </form>
                    </div>
                    <!-- End Contacting -->
                </div>
                <!-- End Contacter -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <p class="copyright text-muted">Copyright &copy; MatthewGordon Co. </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>
