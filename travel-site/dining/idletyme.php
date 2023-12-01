<?php
    $title = "Idletyme Brewing Company";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Idletyme Brewing Company</h1>

        <img class="sizeable heroimg heroimgTop" src="<?php echo $path ?>assets/images/idletyme.jpg" alt="piecasso restaurant">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>If the weather allows, enjoy fresh air while dining with Idletyme's mostly outdoor seating. Idletyme Brewing Company brews delicious and high quality beers that take from the classic European style and mixes in the Vermont hop culture.</p>
                <p>Besides beer, Idletyme offers a relaxing family friendly atmosphere with delicious fare.</p>
    
                <p><strong>Type of Food: </strong>American Pub</p>
                <p><strong>Hours: </strong><br>Monday to Sunday - 11:30am to 9pm</p>
                <p><strong>Phone: </strong><a class="website" href="tel:8022534765">(802) 253-4765</a></p>
                <p><strong>Website: </strong><a class="website" target="_blank" href="https://idletymebrewing.com/">Idletyme Brewing Company</a></p>
            </section>

            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=idlyetyme%20brewing%20&z=15&output=embed"></iframe>
            </section>
        </div>

    </main>
        
<?php include $path . "assets/inc/footer.php"; ?>