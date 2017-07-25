<?php include('../../templates/newHeader.html') ?>
<?php
/**
 * Created by PhpStorm.
 * User: Evan Tellep
 * Date: 9/6/2016
 * Time: 6:52 PM
 */

//Grabbing the values from the assignment01 html page with the form
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$inGameName = $_POST["inGameName"];
$sex = $_POST["sex"];

//Starting a session to use the session array to pass already existing variables to the next page
//ref: http://stackoverflow.com/questions/871858/php-pass-variable-to-next-page
session_start();
$_SESSION['fname'] = $fname;
$_SESSION['email'] = $email;

//Bringing the stylesheet in for this php page
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"..\..\zenGardenTemplate.css\">";

//Initiating a monologue to assure the player that the correct info was received
echo "<div id='main'>";
echo "<h1>Hello $fname $lname!</h1>";
echo "<p>We're glad to have your character, $inGameName on our server!</p>";
echo "<p>We see that you are $sex. We simply ask this question to understand the diverse population on our server.</p>";
echo "<p>Would you like to receive news at: $email?</p>";

//Asking the player if they wish to have their email used instead of assuming they do and sending them spam.
echo "<form action='receiveNews.php' method='get'><input type='radio' name='receiveNews' value='yes'>Yes <input type='radio' name='receiveNews' value='no'>No<br>
    <input type='submit' name='submit' value='Submit'>
    </form>";
echo "</div>";
?>
<?php include('../../templates/footer.html') ?>
