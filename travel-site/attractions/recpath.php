<?php
    $title = "Stowe Recreation Path";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Stowe Recreation Path</h1>

        <img class="sizeable heroimg" src="<?php echo $path ?>assets/images/recPath.jpg" alt="stowe rec path">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>The Stowe Recreation Path is a beautiful 5.3 mile trail from downtown Stowe Village to Top Notch Resort. While riding this path, you will be greeted with stunning views if the town of Stowe, Mt. Mansfield, and the surrounding landscape.</p>

                <p>There are multiple places to park along the path which is perfect if you want to take a dip in the crystal clear brook that runs along most of the path.</p>
    
                <p><strong>Recommended Age: </strong>All Ages</p>
                <p><strong>Average Time Spent here: </strong>One hour to three hours</p>
            </section>

            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=stowe%20recreation%20path&z=15&output=embed"></iframe>
            </section>
        </div>

    </main>

<?php include $path . "assets/inc/footer.php"; ?>