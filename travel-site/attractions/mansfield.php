<?php
    $title = "Mt. Mansfield";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

    <main class="gridMain">
        
        <h1 class="heading">Mt. Mansfield</h1>
        
        <img class="sizeable heroimg" src="<?php echo $path ?>assets/images/mansfield.jpg" alt="piecasso restaurant">

        <div class="contentContainer">
            <section class="info">
                <h2>Information</h2>
                <p>Mt. Mansfield is the tallest mountain in Vermont at 4,395 ft. There are many ways to get up Mt. Mansfield, for all the trails, you are looking at atleast a 5 hour venture. However, for those non-hikers, there is a 4.5 mile toll road you can take which is very scenic and fast. Once you are in the parking lot, you can choose to go towards the forehead or chin, chin being the summit. When traversing towards the chin, you will have 360-degree views most of the way!</p>
                
                <p><strong>Recommended Age: </strong>10+ with guardian</p>
                <p><strong>Average Time Spent here: </strong>Three hours to six hours</p>
            </section>

            <section class="location">
                <h2>Location</h2>
                <iframe src="https://maps.google.com/maps?q=mt%20mansfield&z=15&output=embed"></iframe>
            </section>
        </div>
        
    </main>
    
<?php include $path . "assets/inc/footer.php"; ?>