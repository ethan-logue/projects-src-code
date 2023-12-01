<?php
    $title = "Places to Eat";
    $path = "../";
    $footer = "";
    $footerList = "footerList";

    include $path . "assets/inc/header.php"; 
?>

    <main>

        <h1 class="heading">Places to Eat</h1>

        <hr>

        <p>Stowe is home to many delicious restaurants who also serve some famous Vermont beer! The culture of Stowe celebrates locally-sourced ingredients with a creative twist. Restaurants around Stowe are very family friendly and there are options for everyone for every meal. The world-renowned Ben & Jerry's home is even a short drive away from downtown!</p>

        <div class="contentContainer wrap catalogContainer">
            <a class="catalog pie" href="./piecasso.php">
                <p>Piecasso</p>
            </a>

            <a class="catalog idle" href="./idletyme.php">
                <p>Idletyme Brewing Company</p>
            </a>

            <a class="catalog ben" href="./benjerry.php">
                <p>Ben & Jerry's</p>
            </a>
        </div>

    </main>

<?php include $path . "assets/inc/footer.php"; ?>