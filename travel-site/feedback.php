<?php
    // include "../dbcon.php";

    // if name is sent with post, also causes refresh to post another comment
    if (validate() == true && isset($_POST['name'])) {
        $name = sanitize($_POST['name']);
        $email = sanitize(($_POST['email']));
        $numGroup = sanitize($_POST['numGroup']);
        // $dateVisited = $_POST['dateVisited'];
        if ($_POST['favorite'] == 'Other') {
            $favorite = sanitize($_POST['favoriteText']);
        } else {
            $favorite = sanitize($_POST['favorite']);
        }
        $rating = sanitize( $_POST['rating']);
        $comment = sanitize($_POST['comment']);

        // prepared statement
        $stmt = $conn->prepare("INSERT INTO `iste240_comments` (`Name`, `Email`, `NumGroup`, `Favorite`, `Rating`, `Comment`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisis", $name, $email, $numGroup, $favorite, $rating, $comment);      

        // posts comment
        $postComment = "INSERT INTO `iste240_comments` (`Name`, `Email`, `NumGroup`, `Favorite`, `Rating`, `Comment`) VALUES ('$name','$email', '$numGroup', '$favorite', '$rating', '$comment')";
        if(!$stmt->execute()) {
            echo '<p class="redText">ERROR: Data was not inserted</p><br>';
        } else {
            header("Location: feedback.php");
            echo "<script>console.log('Data Inserted');</script>";
        }

        $stmt->close();
    }

    $output = "";
    function validate() {
        if (empty($_POST['name'])) {
            $output = 'Please provide a name!';
            return false;
        } else if (empty($_POST['email'])) {
            $output = 'Please provide an email!';
            return false;
        } else if (empty($_POST['numGroup'])) {
            $output = 'Please provide the size of your group!';
            return false;
        } else if (empty($_POST['favorite'])) {
            $output = 'Please provide your favorite place!';
            return false;
        } else if (empty($_POST['comment'])) {
            $output = 'Please provide a comment!';
            return false;
        } else {
            return true;
        }
    }

    function sanitize($str) {
		$str = htmlentities(trim(strip_tags($str)));
		return substr($str, 0);
	}

    $title = "About Your Visit";
    $path = "./";
    $footer = "";
    $footerList = "footerListScroll";

    include $path . "assets/inc/header.php"; 
?>
    
    <main>

        <h1 class="heading">Please tell us about your visit:</h1>
        <hr>

        <?php echo '<p class="redText">' . $output . '</p>' ?>

        <form name="feedback" method="post" action="./feedback.php" onsubmit="return validate()">
            
            <div>
                <label for="name">Name: </label>
                <input class="textbox" type="text" name="name" id="name" placeholder="John Doe">
            </div>
            
            <div>
                <label for="email">Email: </label>
                <input class="textbox" type="email" name="email" id="email" placeholder="john@doe.com">
            </div>

            <div>
                <label for="numGroup">How many people were in your group? </label>
                <input class="textbox" type="number" name="numGroup" id="numGroup" value="1" min="1" max="20"><br>
            </div>

            <!-- <div>
                <label for="dateVisited">When did you visit? </label>
                <input class="textbox" type="date" name="dateVisited" id="dateVisited"><br>
            </div> -->

            <fieldset>
                <legend>Favorite Place</legend>

                <input class="radio" type="radio" name="favorite" id="benJerry" value="Ben & Jerry\'s" onclick="showBox()">
                <label for="benJerry">Ben & Jerry's</label><br>
                
                <input class="radio" type="radio" name="favorite" id="mercantile" value="Stowe Mercantile" onclick="showBox()">
                <label for="mercantile">Stowe Mercantile</label><br>

                <input class="radio" type="radio" name="favorite" id="piecasso" value="Piecasso" onclick="showBox()">
                <label for="piecasso">Piecasso</label><br>

                <input class="radio" type="radio" name="favorite" id="swimHole" value="Swimming Hole" onclick="showBox()">
                <label for="swimHole">Swimming Hole</label><br>

                <input class="radio" type="radio" name="favorite" id="mansfield" value="Mt. Mansfield" onclick="showBox()">
                <label for="mansfield">Mt. Mansfield</label><br>

                <input class="radio" type="radio" name="favorite" id="other" value="Other" onclick="showBox()">
                <label for="other" id="otherLabel">Other</label>
                <input class="textbox" type="text" name="favoriteText" id="otherBox">

            </fieldset>

            <div class="ratingContainer"> <!-- keeps everything for the slider in the same tag -->
                <label for="rating">Rate your overall experience in Stowe:</label><br>
                <input class="slider" type="range" name="rating" id="rating" min="1" max="10" step="1" value="5" oninput="rangeVal.innerText = this.value">
                <label for="rating" id="rangeVal">5</label>
            </div>

            <div>
                <!-- <label for="comment">Any other thoughts?</label><br> -->
                <textarea class="textbox" name="comment" id="comment" placeholder="Any other thoughts?"></textarea>
            </div>

            <input class="button" type="submit" value="Submit">
            
        </form>

        <h2 class="heading">Hear from others!</h2>

        <p>Unfortunately, the database host I was using seemed to disappear because clicking anything on <a class="website" target="_blank" href="https://www.freesqldatabase.com/">their site</a> throws a 404. I'm currently working on finding an alternative to bring the comment functionality back.</p>
        <p>If you are connected to RIT's network on campus or on the VPN, you can visit <a class="website" target="_blank" href="http://solace.ist.rit.edu/~eml8469/ISTE240/final/feedback.php">the solace version</a> which works.</p>

        <!-- <#?php 
            

            // retrieves comments
            $retrieveComments = "SELECT * FROM `iste240_comments` ORDER BY `Date` DESC";

            if ($result = $conn->query($retrieveComments)) {
                echo "<div class='commentContainer wrap'>";
                while($row = $result->fetch_assoc()) {
                    // this builds the comment box for each comment in the database
                    echo    "<div class='commentBox'>
                                <div class='nameBox'>
                                    <h3>" . $row['Name'] . "</h3>
                                    <p class='commentDate'>" . $row['Date'] . "</p>
                                    <p>" . $row['Comment'] . "</p>
                                </div>

                                <div class='dataBox'>
                                    <p><strong>Favorite Place: </strong>" . $row['Favorite'] . "</p>
                                    <p><strong>People in Group: </strong>" . $row['NumGroup'] . "</p>
                                    <p><strong>Rating: </strong>" . $row['Rating'] . "</p>
                                </div>
                            </div>";
                }
                echo "</div>";
            }
        ?> -->

    </main>
    
<?php include $path . "assets/inc/footer.php"; ?>