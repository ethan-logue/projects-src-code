<?php
    $title = "Stoweflake";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Stoweflake</h1>

        <img class="sizeable heroimg heroimgBot" src="<?php echo $path ?>assets/images/stoweflake.jpg" alt="piecasso restaurant">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>Near downtown Stowe, the Stoweflake resort presents a perfect location for guests to enjoy their stay in Stowe with upscale accommodations, generous amenities, and various activities to do within the property and nearby.</p>

                <p>Stoweflake is located nicely in between Mt.Mansfield and downtown giving you many options for places to explore as well as being near most of the top restaurants in the area!</p>
    
                <p><strong>Average Room Cost: </strong>$200 to $444</p>
                <p><strong>Phone: </strong><a class="website" href="tel:8002532232">(800) 253-2232</a></p>
                <p><strong>Website: </strong><a class="website" target="_blank" href="https://www.stoweflake.com/">Stoweflake</a></p>
            </section>

            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=stoweflake&z=15&output=embed"></iframe>
            </section>
        </div>

    </main>
        
<?php include $path . "assets/inc/footer.php"; ?>