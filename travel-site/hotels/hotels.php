<?php
    $title = "Places to Stay";
    $path = "../";
    $footer = "";
    $footerList = "footerList";

    include $path . "assets/inc/header.php"; 
?>

    <main>

        <h1 class="heading">Places to Stay</h1>

        <hr>

        <p>When looking for a place to stay, we've got your back! Stowe has numerous options when looking for somewhere to stay fitting all budgets. Here we will highlight a few of our favorite options and give you all you all you need to know about them. When lodging in Stowe, you have various options when it comes to location. Choose from being in the mountains, downtown, or somewhere in between.</p>

        <div class="contentContainer wrap catalogContainer">
            <a class="catalog trapp" href="./trapp.php">
                <p>Trapp Family Lodge</p>
            </a>

            <a class="catalog gmi" href="./greenmountain.php">
                <p>Green Mountain Inn</p>
            </a>

            <a class="catalog stwflk" href="./stoweflake.php">
                <p>Stoweflake</p>
            </a>
        </div>

    </main>
    
<?php include $path . "assets/inc/footer.php"; ?>