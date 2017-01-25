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
        <nav class="menuBar">
            <div class="logo">
                <a href="home.php"><img src=""><p>Welcome to What's Ahead</p></a>
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
        <header class="theArticle">
            <?php
                $article = $_GET["name"];
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

                $sql="SELECT * FROM article WHERE id = $article";

                //INSERT INTO subscribe (id, articleID, date, text, approval) VALUES (NULL, '$article',NULL,'$text','0');
                //SELECT * FROM comments WHERE articleID = $article;
				
                $result=mysqli_query($conn,$sql);

                while ($row=mysqli_fetch_assoc($result)) {
            ?>
            <div class="text-center theArticleTitle">
                    <img src="<?php echo $row["banner"]; ?>">
                    <h1 class="scrolldown"><?php echo $row["title"]; ?></h1>
            </div>
        </header>
        <!-- End Hero -->

        <!-- Main Content -->
        <div class="container">
            <!-- Row -->
            <div class="row article">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"> 
                    <h4 class="published">Published <?php echo $row["date"]; ?></h4>
                    <p class="info"><?php echo $row["content"]; ?></p>
                </div>
            </div>
            <!-- End Row -->
            <?php 
		        }
		                			
		        mysqli_close($conn);   
		    ?>

            <aside class="sideBar">
                <div>
                    <a href="articleTopic.php?name=1">Science</a>
                    <a href="articleTopic.php?name=2">Technology</a>
                    <a href="articleTopic.php?name=3">Mishmash</a>
                </div><br><br><br><br>
                <div>
                    <a href="articleTopic.php?name=4">Within This Year</a><br>
                    <a href="articleTopic.php?name=5">Next 10 Years</a><br>
                    <a href="articleTopic.php?name=6">Next 20 Years</a><br>
                    <a href="articleTopic.php?name=7">Next 50 Years</a><br>
                    <a href="articleTopic.php?name=8">More Than 50 Years</a>
                </div>
            </aside>

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
