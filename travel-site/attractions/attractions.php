<?php
    $title = "Places to See";
    $path = "../";
    $footer = "";
    $footerList = "footerList";

    include $path . "assets/inc/header.php"; 
?>

    <main>

        <h1 class="heading">Places to See</h1>

        <hr>

        <p>Around Stowe, there are so many places to get some exercise with breathtaking views! From landmarks of the long trail to a casual family bike ride on the recreation path, there is truly something for everyone to do in Stowe. In each listing, we highlight all you need to know about these incredible spots around Stowe.</p>

        <div class="contentContainer wrap catalogContainer">
            <a class="catalog mans" href="./mansfield.php">
                <p>Mt. Mansfield</p>
            </a>

            <a class="catalog rec" href="./recpath.php">
                <p>Stowe Recreation Path</p>
            </a>

            <a class="catalog swim" href="./swimming.php">
                <p>Swimming Holes</p>
            </a>
        </div>

    </main>

<?php include $path . "assets/inc/footer.php"; ?>