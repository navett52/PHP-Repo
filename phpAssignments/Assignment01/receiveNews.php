<?php include('../../templates/header.html') ?>
<?php
/**
 * Created by PhpStorm.
 * User: Evan Tellep
 * Date: 9/6/2016
 * Time: 10:07 PM
 */

//Grabbing the GET variable passed to us from the last page to see if the user does or does not want news
$receiveNews = $_GET["receiveNews"];

//Starting a session to grab variables out of the session array from the last page to be used here to personalize this page a bit more
session_start();
$fname = $_SESSION['fname'];
$email = $_SESSION['email'];

//echo "$receiveNews<br>"; debug statement to make sure that receiveNews was being assigned a variable

//If the value that was given on the last page is yes we want to thank them for being interested
//If the value was no, we let them know we understand and WILL NOT send them emails
if ($receiveNews == 'yes') {
    echo "
<div>
    <h1>Thank you so much $fname for your interest in our server!</h1>
    <button><a href='http://homepages.uc.edu/~tellepet/'>Home</a></button>
</div>
";
} else {
    echo "
<div>
    <h1>We understand $fname that you do not wish to receive news about our server, and we will not send any mail to: $email</h1>
    <button><a href='http://homepages.uc.edu/~tellepet/'>Home</a></button>
</div>
";
}
?>
<?php include('../../templates/footer.html') ?>
