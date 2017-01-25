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

        <!-- External Style Sheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <!-- Top Screen -->
        <div>
            <!-- Navigation -->
            <nav class="menuBar">
                <div class="logo">
                    <a href="home.php"><p>Welcome to What's Ahead</p></a>
                </div>
                <div class="menuLinks">
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
            <div class="hero">
                <div class="text-center phrases herowrapper">
                    <h1 class="siteTitle">What's Ahead?</h1>
                    <span class="titlePhrase ">The Future is <b class="rotate color">in Your Hands, Bright, Tech, Science, Now, Yours, Ours</b>.</span>
                </div>
            </div>
            <!-- End Hero -->

            <!-- Scroll Down -->
            <div class="down text-center">
                <a href="javascript:void(0);" class="scrolldown">
                    <h3 class="scroll">Continue</h3>
                    <h4 class="scroll">V</h4>
                </a>
            </div>
            <!-- End Scroll Down -->
        </div>
       <!-- End Top Screen -->

       	<!-- Main Content -->
        <div class="container">
        	<!-- Row -->
            <div class="row">
                
                <!-- Top Article Section -->
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                	<h1 class="topStories text-center">Top Stories</h1><hr/>

                    <?php
                        $servername = "localhost";
                        $username = "mgordon_article";
                        $password = ";O]#(aSE!3r5";
                        $dbname = "mgordon_articleDB";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            echo "Error: Unable to connect to MySQL." . PHP_EOL;
                            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                            exit;
                        }
                        
                        $sql="SELECT * FROM article";
                        
                        $result=mysqli_query($conn,$sql);

                        while ($row=mysqli_fetch_assoc($result)) {
                            if($row["popularity"]>0 && $row["popularity"]<=5){
                    ?>
                    
                    <div class="post-preview">
                        <a href="exactArticle.php?name=<?php echo $row["id"]; ?>"><img class="articleThumb" src="<?php echo $row["picture"]; ?>"></a>
                        <a href="exactArticle.php?name=<?php echo $row["id"]; ?>">	
                            <h2 class="title"><?php echo $row["title"]; ?></h2>
                            <h3 class="subtitle"><?php echo $row["subtitle"]; ?></h3>
                        </a>
                       <p class="post-meta">Posted on <?php echo $row["date"]; ?></p>
                    </div>
                    <hr>

                    <?php
                            } 
                        }
                        mysqli_close($conn);   
                    ?>
                </div>
                <!-- End Top Article Section -->
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

        <script src="js/script.js"></script>

    </body>
</html>
