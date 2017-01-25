<?php 
    $text=$_REQUEST['text'];
    $article = $_GET["name"];
    $date = getdate();
    $URL = "exactArticle.php?name=" .$text;

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

        $sql = "INSERT INTO comments (id, articleID, date, text,approved)
                VALUES (NULL, '$article','$date', '$text','0')";

            if (mysqli_query($conn, $sql)) {
                echo " And New record created in the database successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

    mysqli_close($conn);
?>