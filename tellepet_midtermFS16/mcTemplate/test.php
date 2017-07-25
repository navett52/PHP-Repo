<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 9/23/2016
 * Time: 4:58 PM
 */
//include "templates/newHeader.php";
//include "php/populateAssignmentsDropdown.php";
//include "templates/footer.html";
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/test.css">
</head>

<div class="dropdown">
    <a href="http://homepages.uc.edu/~tellepet/PHPAssignmentsPage.php" class="dropbtn">PHP Assignments</a>
    <div class="dropdown-content">
        <?php include "php/populateAssignmentsDropdown.php"; ?>
    </div>
</div>

