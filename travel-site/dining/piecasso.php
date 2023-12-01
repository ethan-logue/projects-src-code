<?php
    $title = "Piecasso";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Piecasso</h1>

        <img class="sizeable heroimg heroimgTop" src="<?php echo $path ?>assets/images/piecasso.jpg" alt="piecasso restaurant">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>Piecasso serves traditional New York Style pizza, great salads, various entrées and deserts, fine wine, martinis, and Vermont microbrews in a modern style with sectionerse music and all around great vibes.</p>

                <p>Piecasso is the perfect place for people of all ages to have a delicious meal. Kids even have their own great menu with coloring!</p>
    
                <p><strong>Type of Food: </strong>Italian</p>
                <p><strong>Hours: </strong><br>Sunday to Thursday - 11am to 9pm<br>Friday and Saturday - 11am to 10pm</p>
                <p><strong>Phone: </strong><a class="website" href="tel:8022534411">(802) 253-4411</a></p>
                <p><strong>Website: </strong><a class="website" target="_blank" href="https://www.piecasso.com/">Piecasso</a></p>
            </section>

            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=piecasso&z=15&output=embed"></iframe>
            </section>
        </div>

    </main>
        
<?php include $path . "assets/inc/footer.php"; ?>