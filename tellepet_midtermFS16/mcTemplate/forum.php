<?php
session_start();
define('TITLE', 'Forum');
define('CSS', 'css/contentStyle.css');
include('templates/newHeader.html');

//Identify file to use
$file = '../registrations.txt';

//Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email'])) {
        echo "<p>Registered at " . date('H:i, jS F Y') . "</p>";
        echo "<p>Your registration is as follows: </p>";
        echo "Information given:<br/>";
        print '<p>' . $_POST['firstName'] . '<br/>' . $_POST['lastName'] . '<br/>' . $_POST['email'] . '</p>';
        $date = date('H:i, jS F Y');
        $outputstring = $date . "," . $_POST['firstName'] . "," . $_POST['lastName'] . "," . $_POST['email'] . PHP_EOL;

        try {
            if (!($fp = @fopen('../registrations.txt', ab))) {
                throw new fileOpenException();
            }
            if (!flock($fp, LOCK_EX)) {
                throw new fileLockException();
            }
            if (!fwrite($fp, $outputstring, strlen($outputstring))) {
                throw new fileWriteException();
            }

            flock($fp, LOCK_UN);
            fclose($fp);
            echo "<p>You are now registered</p>";
            print '<a href="register.php">Check Registrations</a>';
        } catch (fileOpenException $foe) {
            echo "<p><strong>Registration file could not be opened. Please contact Webmaster for help</strong></p>";
        } catch (Exception $e) {
            echo "<p><strong>Your registration could not be processed at this time. Please try again later</strong></p>";
        }
    } else {
        print '<p style="color: red;">You need to fill out each field!</p>';
        print '<a href="http://homepages.uc.edu/~tellepet/forum.php">Back</a>';
    }
} else {
    ?>
    <h1>Forum</h1>
    <br/>
    <h2>Register</h2>
    <form action="forum.php" method="post">
        <h4>First Name</h4></br><input type="text" name="firstName" placeholder="First Name">
        <h4>Last Name</h4></br><input type="text" name="lastName" placeholder="Last Name">
        <h4>E-Mail</h4></br><input type="email" name="email" placeholder="E-Mail">
        <br/></br><input type="submit" name="submit" value="Register">
    </form>
    <br/>
    <a href="register.php">Check Registrations</a>
    <?php
}
include "templates/footer.html";
?>
