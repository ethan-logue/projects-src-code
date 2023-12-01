<?php
    $title = "Grading Criteria";
    $path = "./";
    $footer = "footerScroll";
    $footerList = "footerListScroll";

    include $path . "assets/inc/header.php"; 
?>

    <main class="gradingMain">

        <h1 class="heading">Grading Criteria</h1>

        <h2>General</h2>
        <ul class="gradingList">
            <li><strong>Design: </strong>My page demonstrates the CRAP design principles with the contrastive red, white, black color combination. It's navigation bar is repetitive across all pages to not confuse the user. Elements on the pages are aligned evenly and centered as a whole and keeps text to the left for readability. Similar elements are grouped together and different ones are separated by gaps or horizontal rules.</li>
            <li><strong>Organization: </strong>I believe my pages are organized nicely keeping a consistent flow and hierarchy across all pages. I think my navigation bar makes sense and user's will easily be able to find everything they need.</li>
            <li><strong>Content: </strong>I think my content is interesting to read because each topic has a short description that gives the reader enough information to let them know what to expect but doesn't spoil all there is to explore. This would influence the user to come check out each spot and have the joy of discovering things by themselves. Spelling across all pages is correct and each place has an embedded interactive map.</li>
        </ul>

        <h2>Quantity of Content</h2>
        <ul class="gradingList">
            <li><strong>Number of Pages w/ Sufficient Content: </strong>I have 14 pages not including the grading and sources page, although hotels.html, dining.html, and attractions.html don't have a lot content.</li>
        </ul>

        <h2>Miscellaneous</h2>
        <ul class="gradingList">
            <li><strong>Code Design: </strong>In my CSS file, everything is indented the same way, and almost all elements on each page has a class allowing easily identifiable classes in the CSS. I added comments in the CSS to explain what certain things are doing. In the HTML, semantic were used where able, but I did use a lot of divs to group things together to manipulate them in CSS. No inline styles were used and I wrote all the code.</li>
            <li><strong>Interaction Design & Navigation: </strong>There is no you are here indicator, but each page is accessible from every page with a global navigation. Each page has a unique title that is related to the current page.</li>
            <li><strong>HTML & CSS Validates: </strong>All HTML and CSS files validate.</li>
            <li><strong>Grading Document Linked from Homepage: </strong>On every page in the footer, the sources and grading pages are linked.</li>
        </ul>

        <h2>Responsive</h2>
        <ul class="gradingList">
            <li><strong>Mobile Friendly: </strong>Each page is able to be viewed on a mobile device very comfortably. With a new mobile menu, navigating the site is easier and satisfying to see in action.</li>
        </ul>
        
        <p class=redText><strong>--- Additions ---</strong></p>

        <h2>Original JavaScript Component</h2>
        <ul class="gradingList">
            <li><strong>Burger Menu: </strong>When on smaller screen sizes, instead of stacking all the nav links, they are put into a burger menu to create a more pleasing and less cluttered aesthetic. This is done by creating a button that changes the display of the menu from none to block and adding/removing classes from the menu depending on its state.</li>
        </ul>

        <h2>DHTML Component</h2>
        <ul class="gradingList">
            <li><strong>Burger Menu Animation: </strong>When opening and closing the burger menu, it has a little animation to transition between the three lines and a 'X'. This is done by a button toggling the adding and removing of certain classes in JavaScript which change the positioning of the lines. There is also animation on the menu that appears where it slides in and out to conserve a fluid experience. THis is also triggered by the same button press and uses css keyframes applied via JavaScript</li>
            <li><strong>Other Box: </strong>On the feedback form, if you select the other box a textbox appears allowing you to type in something other than the options given. If you click another radio button afterwards, the textbox disappears.</li>
        </ul>

        <h2>Extras</h2>
        <ul class="gradingList">
            <li><strong>404 Page: </strong>I used an htaccess file to route any 404 error to a <a class="website" href="./404.php">customized 404 page</a>. This gives users the ability to navigate to anywhere on the site instead of a dead end page only displaying an error. You can try it out by deleting any part of the url after 'final/'.</li>
            <li><strong>Dynamic Footer: </strong>If the page requires scrolling to see all the content, then the footer is set with 'position: relative'. If no scrolling is needed, then it has 'position: absolute'. This is figured out using JavaScript to check if the document height is longer than the viewport height. Depending on the result, elements of the footer have classes applied to them which give it the correct positioning</li>
            <li><strong>Extra Data in Comments: </strong>The minimum requirements for the comment form include name, email, and comment. My from collects this data as well as number of people in the group, their favorite place, and a rating. The favorite place variable also uses an if else statement to choose which value to use between one of the radio buttons or the other box depending on what the user submitted.</li>
            <li><strong>Database Functionality on Banjo: </strong>Since Adminer doesn't work with Banjo's server and I wanted to showoff this site on my portfolio, I looked for an alternative database host. I selected a website which uses phpMyAdmin and it took a little bit to get set up, but once I did it worked perfectly.</li>
        </ul>

    </main>
    
<?php include $path . "assets/inc/footer.php"; ?>