<!DOCTYPE html>
<html lang="en">

<!-- Professor John-Paul Takats, ISTE-240 - Ethan Logue -->
<!-- Final Project, 4/13/2023 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $path ?>assets/images/favicon.ico">
    <title><?php echo $title ?></title>
</head>
<body>

    <div id="nav"></div> <!-- continues the nav bar across the whole page -->
    
    <div class="container">

    <header>
        <a id="logo" href="<?php echo $path ?>index.php"><img src="<?php echo $path ?>assets/images/stowe-white-small.png" alt="Stowe Vermont Logo"></a>

        <nav>
            <div class="desktop">
                <ul class="dropdown">
                    <li>
                        <a class="underline" href="<?php echo $path ?>index.php">Home</a>
                    </li>
                    <li class="drop">
                        <a class="underline" href="<?php echo $path ?>hotels/hotels.php">Hotels</a>
                        <ul class="submenu">
                            <li><a href="<?php echo $path ?>hotels/trapp.php">Trapp Family Lodge</a></li>
                            <li><a href="<?php echo $path ?>hotels/greenmountain.php">Green&nbsp;Mountain&nbsp;Inn</a></li>
                            <li><a href="<?php echo $path ?>hotels/stoweflake.php">Stoweflake</a></li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a class="underline" href="<?php echo $path ?>dining/dining.php">Dining</a>
                        <ul class="submenu">
                            <li><a href="<?php echo $path ?>dining/piecasso.php">Piecasso</a></li>
                            <li><a href="<?php echo $path ?>dining/idletyme.php">Idletyme Brewing</a></li>
                            <li><a href="<?php echo $path ?>dining/benjerry.php">Ben & Jerry's</a></li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a class="underline" href="<?php echo $path ?>attractions/attractions.php">Attractions</a>
                        <ul class="submenu" id="attractions">
                            <li><a href="<?php echo $path ?>attractions/mansfield.php">Mt. Mansfield</a></li>
                            <li><a href="<?php echo $path ?>attractions/recpath.php">Recreation Path</a></li>
                            <li><a href="<?php echo $path ?>attractions/swimming.php">Swimming Holes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="underline" href="<?php echo $path ?>feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>
            
            <!-- MOBILE -->
            <div class="mobile">
                <button class="toggleNav" onclick="mobileNav();">
                    <span class="menuIcon top"></span>
                    <span class="menuIcon middle"></span>
                    <span class="menuIcon bottom"></span>
                </button>
    
                <ul class="mobileDropdown">
                    <li>
                        <a class="underline" href="<?php echo $path ?>index.php">Home</a>
                    </li>
                    <li class="mobileDrop">
                        <a class="underline" href="<?php echo $path ?>hotels/hotels.php">Hotels</a>
                    </li>
                    <li class="mobileDrop">
                        <a class="underline" href="<?php echo $path ?>dining/dining.php">Dining</a>
                    </li>
                    <li class="mobileDrop">
                        <a class="underline" href="<?php echo $path ?>attractions/attractions.php">Attractions</a>
                    </li>
                    <li>
                        <a class="underline" href="<?php echo $path ?>feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>