<?php
    $title = "Trap Family Lodge";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Trapp Family Lodge</h1>

        <img class="sizeable heroimg" src="<?php echo $path ?>assets/images/trapp.jpg" alt="trapp family lodge">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>The Trapp Family Lodge is an European-style resort nestled in the mountains of Stowe, VT. Featuring spectacular year-round views, upscale amenities, and numerous outdoor activities: Trapp Family Lodge is a great choice for lodging during all four seasons.</p>

                <p>If you want a place to come back to during the year, you can purchase a timeshare for one of their 18 luxurious Villas or 100 Guest House chalets.</p>
    
                <p><strong>Average Room Cost: </strong>$220 to $380</p>
                <p><strong>Phone: </strong><a class="website" href="tel:8008267000">(800) 826-7000</a></p>
                <p><strong>Website: </strong><a class="website" target="_blank" href="https://www.trappfamily.com/">Trapp Family Lodge</a></p>
            </section>
            
            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=trapp%20family%20lodge&z=15&output=embed"></iframe>
            </section>
        </div>

    </main>
        
<?php include $path . "assets/inc/footer.php"; ?>