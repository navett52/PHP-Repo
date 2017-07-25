<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 10/23/2016
 * Time: 10:44 PM
 */
define('TITLE', 'Login');
define('CSS', 'css/contentStyle.css');
include "templates/newHeader.html";

//check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //handle the form
    //print '<p>Hello' . $_POST['email'] . '!</p>';
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        if ((strtolower($_POST['email']) == 'evantellep@yahoo.com') && ($_POST['password']) == 'testpass') {//If login is correct
            //Starting a session which is a persistent global array to store certain variable throughout the stay of the user at the site
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = time(); //Grabbing what time the user logged in
            //redirect the user to welcome page
            ob_end_clean(); //destroy the buffer
            header('Location: index.php');
            exit();
        } else { //else if it is not correct
            print '<p>The login info is incorrect. Please try again.</p>';
        }
    } else {//email and or password missing
        print '<p>Please make sure you enter both e-mail and password. Please try again.</p>';
    }
} else { //Display the form
    print'<form action="login.php" method="post">
            <input type="email" placeholder="e-mail" name="email"><br>
            <input type="password" placeholder="password" name="password"><br>
            <input type="submit" value="Login" id="submit"> or <a href="http://homepages.uc.edu/~tellepet/forum.php">Sign Up</a>
          </form>';
}

include "templates/footer.html";