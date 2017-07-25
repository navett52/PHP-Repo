<?php
session_start();
define('CSS', 'css/indexStyle.css');
include "templates/newHeader.html"
?>
<div id="comparison">
    <div class="img" id="left">
        <!--<div id="leftLeft">
            <h1>Survival</h1>
        </div>
        <div id="leftRight">
            <ul>
                <li>Stake your claim!</li>
                <li>Gather your resources!</li>
                <li>Build your Kingdom!</li>
            </ul>
        </div>-->
    </div>
    <div class="img" id="right">
        <!--<div id="rightLeft">
            <ul>
                <li>Explore a vast world!</li>
                <li>Learn the History!</li>
                <li>Defeat darkness!</li>
            </ul>
        </div>
        <div id="rightRight">
            <h1>RPG</h1>
        </div>-->
    </div>
</div>
<script src="js/imageSlider.js"></script>
<?php include "templates/footer.html"?>

<!-- http://codepen.io/Kseso/pen/dyeBL/?editors=1100 -->
