<?php
    $title = "Ben & Jerry's";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Ben & Jerry's</h1>

        <img class="sizeable heroimg heroimgTop" src="<?php echo $path ?>assets/images/benjerry.jpg" alt="piecasso restaurant">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>Ben & Jerry's is a global brand who's home is Waterbury, Vermont; just 15 minutes from Stowe! Here you can visit the factory where their favorite ice cream is made and even get a delicious sample.</p>

                <p>If you aren't touring, you can visit one of the windows outside to the right of the entrance and order from,all our current flavors. There's a playground for the kids and you can even visit the Flavor Graveyard where all of their past flavors reside with a grave informing you when the flavor was available.</p>
    
                <p><strong>Type of Food: </strong>Ice Cream</p>
                <p><strong>Hours: </strong><br>Tuesday to Saturday - 10am to 6pm<br>Sunday and Monday - Closed</p>
                <p><strong>Phone: </strong><a class="website" href="tel:8023371201">(802) 337-1201</a></p>
                <p><strong>Website: </strong><a class="website" target="_blank" href="https://www.benjerry.com/about-us/factory-tours">Ben & Jerry's</a></p>
            </section>

            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=ben%20jerry%20waterbury&z=15&output=embed"></iframe>
            </section>
        </div>

    </main>

<?php include $path . "assets/inc/footer.php"; ?>