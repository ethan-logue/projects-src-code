<?php
    $title = "Swimming Holes";
    $path = "../";
    $footer = "footerScroll";
    $footerList = "footerListScroll";
    
    include $path . "assets/inc/header.php"; 
?>

        <main>

            <h1 class="heading">Swimming Holes</h1>
                        
            <div class="swimContainer wrap">
                <section class="swimInfo">
                    <img class="sizeable heroimgSwim" src="<?php echo $path ?>assets/images/bingham.jpg" alt="piecasso restaurant">
                    
                    <h2>Bingham Falls</h2>
                    <p>Bingham Falls is short quarter-mile hike from the parking lot, but towards the bottom it gets quite steep. The trail starts off gradual, but once you get to the fork, go right and you will traverse stone steps that are most likely wet and slippery so be careful.</p>

                    <p><strong>Recommended Age: </strong>10+ with guardian</p>
                    <p><strong>Average Time Spent here: </strong>45mins to an hour and a half</p>
                    
                    <h2>Location</h2>
                    <iframe src="https://maps.google.com/maps?q=bingham%20falls&z=15&output=embed"></iframe>
                </section>
                
                <section class="swimInfo">
                    <img class="sizeable heroimgSwim" src="<?php echo $path ?>assets/images/mossglen.jpg" alt="piecasso restaurant">
                    
                    <h2>Moss Glen Falls</h2>
                    <p>Moss Glen Falls is the tallest waterfall in Vermont at 85 feet! Getting here involves a quarter-mile scenic hike from the trail head. You can either get up close to the waterfall (expect to get wet!) or you can take a trail up the left side to get the perfect picture, keep in mind this way is a bit steep.</p>

                    <p><strong>Recommended Age: </strong>10+ with guardian</p>
                    <p><strong>Average Time Spent here: </strong>30mins to an hour</p>
                    
                    <h2>Location</h2>
                    <iframe src="https://maps.google.com/maps?q=moss%20glen%20falls&z=15&output=embed"></iframe>
                </section>

                <section class="swimInfo">
                    <img class="sizeable heroimgSwim" src="<?php echo $path ?>assets/images/foster.jpg" alt="piecasso restaurant">
    
                    <h2>Foster's Hole</h2>
                    <p>Being just off the road, Foster's Hole is a great place to stop during the summer and take a quick dip. When arriving at Foster's Hole, you will be parking alongside the road near a guard rail that has a path next to it. The path is a bit steep, but very short and once you get down there are great places to sit all around the swimming hole and even a good rock ot jump off of thats right at the bottom of the path.</p>

                    <p><strong>Recommended Age: </strong>8+ with guardian</p>
                    <p><strong>Average Time Spent here: </strong>30mins to an hour</p>
        
                    <h2>Location</h2>
                    <iframe src="https://maps.google.com/maps?q=fosters%20hole&z=15&output=embed"></iframe>
                </section>
            </div>

        </main>

<?php include $path . "assets/inc/footer.php"; ?>