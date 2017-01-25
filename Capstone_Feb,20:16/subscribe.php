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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- End Navigation -->

        <!-- Hero -->
        <header class="subscribeTitle">
            <div id="hero">
                <div class="current" id="mainPic"><img id="mainPic" src="img/subscribe1.jpg"></div>
                <div id="mainPic"><img  src="img/subscribe2.jpg"></div>
                <div id="mainPic"><img id="mainPic" src="img/subscribe3.jpg"></div>
                <div id="mainPic"><img id="mainPic" src="img/subscribe4.jpg"></div>
            </div>
            <div class="text-center titleSub">
                    <h1>Interested In More?</h1>
                    <span class="">Subscribe Below</span>
            </div>
        </header>
        <!-- End Hero -->

        <!-- Main Content -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                
                <!-- End Subscriber -->
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 subscriber">

                    <div class="subscribeImg">
                            <img class="subThumb" src="img/sub1.jpg" />
                            <img class="subThumb" src="img/sub2.jpg" />
                            <img class="subThumb" src="img/sub3.jpg" />
                        </ul>
                    </div>

                    <div class="subscribing text-center  ">
                        <?php 
                            $action=$_REQUEST['action']; 
                            if ($action=="")    /* display the contact form */ 
                            { 
                        ?> 
                            <form id="contact_form" action="#" method="POST" onsubmit="return validateForm();" enctype="multipart/form-data" class="col-md-4 formSubscribe">
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
								<input id="submit_button" type="submit" value="Send email" />
							</form>
                        <?php 
                        } 
                            else                /* send the submitted data */ 
                            { 
                            $fname=$_REQUEST['name'];
                            $email=$_REQUEST['email']; 
                            $messageContent=$fname." ".$email;
                            if (($fname=="")||($email=="")) 
                                { 
                                echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
                                } 
                            else{         
                                echo "Successfully Subscribed! "; 

                                $servername = "localhost";
                                $username = "mgordon_article";
                                $password = ";O]#(aSE!3r5";
                                $dbname = "mgordon_articleDB";

                                // Create connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                // Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                $sql = "INSERT INTO subscribe (Seq, FirstName, Email)
                                    VALUES (NULL, '$fname','$email')";

                                if (mysqli_query($conn, $sql)) {
                                    echo " And New record created in the database successfully";
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }

                                mysqli_close($conn);
                                    } 
                            }   
                        ?> 
                    </div>
                </div>
                <!-- End Subscriber -->
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
        <script type="text/javascript" src="js/scripter.js"></script>
        <script type="text/javascript" src="js/imageRotater.js"></script>
    </body>
</html>
