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
	    <header class="">
	       <div class="text-center">
	            <h1 class="articlesTitle scrolldown">
	            	<?php
						$title = $_GET["name"];
						switch ($title) {
							case 1:
								echo "Science";
								break;
							case 2:
							    echo "Technology";
							    break;
							case 3:
							    echo "Mishmash";
							    break;
							case 4:
								echo "Within This Year";
								break;
							case 5:
							    echo "Next Ten Years";
							    break;
							case 6:
							    echo "Next Twenty Years";
							    break;
							case 7:
							    echo "Next Fifty Years";
							    break;
							case 8:
							    echo "More Than Fifty Years";
							    break;
						}
					?>
	            </h1>
	        </div>
	    </header><hr>

	    <!-- Main Content -->
	    <div class="container">
	    	<!-- Row -->
	        <div class="row">
	            
	            <!-- Articles -->
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

	                <div class="articleList">
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
							if($title<=3 && $title>0){
								$sql="SELECT * FROM article WHERE topic = $title";
							}else if($title>3 && $title<9){
								$sql="SELECT * FROM article WHERE year = $title";
							}else{
								header("Location: article.html"); /* Redirect browser */
								exit();
							}

							
							$result=mysqli_query($conn,$sql);

                            while ($row=mysqli_fetch_assoc($result)) {
                        ?>
	                	<div class="post-preview">
	                        <a href="exactArticle.php?name=<?php echo $row["id"]; ?>"><img class="articleThumb" src="<?php echo $row["picture"]; ?>"></a>
	                        <a href="exactArticle.php?name=<?php echo $row["id"]; ?>">
	                        	<h2 class="title"><?php echo $row["title"]; ?></h2>	
	                            <h3 class="subtitle"><?php echo $row["subtitle"]; ?></h3>
	                        </a>
	                       <p class="post-meta"><?php echo $row["date"]; ?></p>
	                    </div>
	                    <hr>
                    	<?php 
                   		}
                    	mysqli_close($conn);   
                        ?>
	                </div>

	            </div>
	            <!-- End Articles -->
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
