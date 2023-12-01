// Professor John-Paul Takats, ISTE-240 - Ethan Logue
// Final Project, 4/13/2023

// this function shows the other box on feedback.php
function showBox() {
    var otherRadio = document.getElementById('other');
    var otherBox = document.getElementById('otherBox');
    var otherLabel = document.getElementById('otherLabel');

    if (otherRadio.checked) {
        if (otherLabel.innerHTML == 'Other:') {
            // Stops it from adding an additional ':'
        } else {
            otherLabel.innerHTML += ':'
            otherBox.style.display = 'block';
        }
    }
    if (!otherRadio.checked) {
        otherLabel.innerHTML = 'Other'
        otherBox.style.display = 'none';
    }
}

// this function is for the mobile menu button that changes states from open to close
function mobileNav() {
    var nav = document.getElementsByClassName('mobileDropdown')[0];
    var button = document.getElementsByClassName('toggleNav')[0];
    if (nav.style.display == 'block') {
        nav.classList.add("slideOut");
        button.classList.remove("toggleNavRotate");
        nav.classList.remove("slideIn");
        nav.style.display = '';
    } else {
        nav.classList.remove("slideOut");
        button.classList.add("toggleNavRotate");
        nav.classList.add("slideIn");
        nav.style.display = 'block';
    }
}

// this function validates the html form
function validate() {
    if (document.forms.feedback.name.value == "") {
        alert("Please provide a name");
        return false;
    } else if (document.forms.feedback.email.value == "") {
        alert("Please provide a email");
        return false;
    } else if (document.forms.feedback.numGroup.value == "") {
        alert("Please provide a number between 1 and 20");
        return false;
    }else if (document.forms.feedback.favorite.value == "") {
        alert("Please provide a favorite place");
        return false;
    } else if (document.forms.feedback.comment.value == "") {
        alert("Please provide a comment");
        return false;
    } else {
        return true;
    }
}

// the below is the code to see if the body is taller than the viewport to apply specific classes for the footer
// get the document height
var documentHeight = Math.max(
    document.body.scrollHeight, document.documentElement.scrollHeight,
    document.body.offsetHeight, document.documentElement.offsetHeight,
    document.body.clientHeight, document.documentElement.clientHeight
);

// get the viewport height
var viewportHeight = window.innerHeight;

if (documentHeight > viewportHeight) {
    document.getElementsByTagName("footer")[0].setAttribute("class", "footerScroll");
    document.getElementById("footerList").setAttribute("class", "footerListScroll");
    document.getElementById("footerBar").setAttribute("class", "footerBar");
} else {
    document.getElementsByTagName("footer")[0].setAttribute("class", "");
    document.getElementById("footerList").setAttribute("class", "footerList");
}
