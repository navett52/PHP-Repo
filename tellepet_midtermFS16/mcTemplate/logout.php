<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 10/23/2016
 * Time: 11:33 PM
 */
//need access to the session
session_start();

//delete the session variables
unset($_SESSION);

//reset the session array
$_SESSION = array();

session_destroy();

define('TITLE', 'Logout');
define('CSS', 'css/contentStyle.css');
include ('templates/newHeader.html');
?>

    <p>You are now logged out! Please click <a href="http://homepages.uc.edu/~tellepet/">here</a> to go back home!</p>

<?php
include ('templates/footer.html');
?>