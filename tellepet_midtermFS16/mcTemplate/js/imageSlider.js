/**
 * Created by Evan Tellep on 10/18/2016.
 */
left = document.getElementById("left");
right = document.getElementById("right");
content = document.getElementById("content");

function clickLeft() {
    window.location = "http://homepages.uc.edu/~tellepet/survival.php";
}

function showLeft() {
    left.style.width = 95 + "%";
}

function clickRight() {
    window.location = "http://homepages.uc.edu/~tellepet/rpg.php";
}

function showRight() {
    left.style.width = 5+"%";
}

function moveToMiddle() {
    left.style.width = 50 + "%";
}

window.onload = function() {
    left.style.width = 50 + "%";
    content.style.paddingTop = 0 + "px";
    left.addEventListener("mouseover", showLeft, false);
    left.addEventListener("mouseout", moveToMiddle, false);
    left.addEventListener("click", clickLeft, false);

    right.addEventListener("mouseover", showRight, false);
    right.addEventListener("mouseout", moveToMiddle, false);
    right.addEventListener("click", clickRight, false);
};