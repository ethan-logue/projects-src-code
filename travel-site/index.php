<?php
    $title = "Visit Stowe!";
    $path = "./";
    $footer = "footerScroll";
    $footerList = "footerListScroll";

    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">

        <h1 class=heading>Stowe, Vermont</h1>

        <img class="sizeable heroimg heading" src="./assets/images/stowe.jpg" alt="Town of Stowe">

        <hr>

        <div id="infoContainer">
            <div id="indexInfo">
                <p>Stowe, Vermont is the perfect vacation spot for any season particularly known for its alpine and Nordic recreation, mountain biking, hiking, and world class resorts. Throughout the year, the community comes alive with various festivals, and activities for everyone. Stowe makes the most of its natural setting being nestled between various mountains which provide beautiful views, clear streams, and fine air to create an appealing and distinctively New England style of life.</p>
                <p>Stowe is home to many beautiful places and on this website we will be highlighting a few of our favorites. Ranging from world class resorts, to local swimming holes - we cover various places and give you all the essential information for each!</p>
            </div>

            <div id="mapContainer">
                <img class="sizeable map" src="./assets/images/stowemap.jpg" alt="Map of where Stowe is in Vermont">
            </div>
        </div>

        <hr>

        <section id="indexNav" class="contentContainer wrap">
            <a class="navBox stay" href="./hotels/hotels.php">
                <div class="innerNavBox">   
                    <h2>Places to</h2>
                    <h1>Stay</h1>
                </div>
            </a>

            <a class="navBox eat" href="./dining/dining.php">
                <div class="innerNavBox">
                    <h2>Places to</h2>
                    <h1>Eat</h1>
                </div>
            </a>

            <a class="navBox see" href="./attractions/attractions.php">
                <div class="innerNavBox">
                    <h2>Places to</h2>
                    <h1>See</h1>
                </div>
            </a>
        </section>

    </main>

<?php include $path . "assets/inc/footer.php"; ?>