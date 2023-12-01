<?php
    $title = "Green Mountain Inn";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

        <main class="gridMain">
            
            <h1 class="heading">Green Mountain Inn</h1>

            <img class="sizeable heroimg" src="<?php echo $path ?>assets/images/greenmountain.jpg" alt="piecasso restaurant">

            <div class="contentContainer">
                <section class="info">
                    <h2>Information</h2>
                    <p>In the heart of downtown Stowe lies the Green Mountain Inn. Built in 1933, they've supplied an ideal location for guests to enjoy various activities around Stowe. Guests can enjoy a history rich, friendly, and warm atmosphere with a year-round outdoor pool, game room, and massage treatments.</p>

                    <p>Guests can also enjoy walking to hot spots on main street Stowe like the adjacent Stowe Mercantile, Shaws General Store, and the local school playground for kids.</p>
        
                    <p><strong>Average Room Cost: </strong>$170 to $244</p>
                    <p><strong>Phone: </strong><a class="website" href="tel:8002537302">(800) 253-7302</a></p>
                    <p><strong>Website: </strong><a class="website" target="_blank" href="https://greenmountaininn.com/">Green Mountain Inn</a></p>
                </section>
    
                <section class="location">
                    <h2>Location</h2>
                    <iframe src="https://maps.google.com/maps?q=green%20mountain%20inn&z=15&output=embed"></iframe>
                </section>
            </div>

        </main>
        
<?php include $path . "assets/inc/footer.php"; ?>