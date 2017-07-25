<?php
$from = getcwd();
$to = "/Volumes/UCFSsan31/Users/t/tellepet/Sites/css/AgonCSS.css";
$css = getRelativePath($from,$to);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    echo "<LINK rel=\"stylesheet\" type=\"text/css\" href=\"$css\">"
    ?>
    <title>Ilaris Unbound</title>
    <meta charset="utf8">
</head>
<body>
<div class="header" align="center">
    <div class="banner">
        <img src="Banner.png" alt="AgonCraft">
    </div>
    <div class="login">
        <form action="#" method="post"> <!-- using post method cause this is private data that needs to be securely transferred to the next page -->
            E-Mail: <input type="email" id="email" placeholder="example@example.com" name="email"><br>
            Password: <input type="password" id="password" placeholder="#1234abcd" name="password"><br>
            <input type="submit" name="submit" value="Login">
            <a href="#">or Sign Up</a><!-- needs to go to register.php -->
        </form>
    </div>
    <div class="navigation">
        <div>
            <a href="http://homepages.uc.edu/~tellepet">Home</a>
        </div>
        <div> <!--class="dropdown"-->
            <a href="http://homepages.uc.edu/~tellepet/PHPAssignmentsPage.php"> <!--class="dropbtn"-->PHP Assignments</a>
            <div> <!-- class="dropdown-content"-->
                <!--<?php
                    $test = '<a href="#">test</a>';
                    echo $test;
                    ob_start();
                    include "../php/populateAssignmentsDropdownTesting.php";
                    $data = ob_get_clean();
                    echo %data;
                    //print_r($data);
                    //print sizeof($data);
                    for ($i = 0; $i < sizeof($data); $i++) {
                        echo $data[$i];
                    }
                ?>-->
            </div>
        </div>
        <div>
            <a href="#">Shop</a>
        </div>
        <div>
            <a href="#">Rules</a>
        </div>
        <div>
            <a href="#">Forum</a>
        </div>
        <div>
            <a href="#">Lore</a>
        </div>
        <div>
            <a href="#">Map</a>
        </div>
    </div>
    <div class="ip" align="center">
        <h1 id="ip">mc.agoncraft.net</h1>
    </div>
</div>
<div class="middle">
    <?php
    function getRelativePath($from, $to)
    {
    // some compatibility fixes for Windows paths
    $from = is_dir($from) ? rtrim($from, '\/') . '/' : $from;
    $to   = is_dir($to)   ? rtrim($to, '\/') . '/'   : $to;
    $from = str_replace('\\', '/', $from);
    $to   = str_replace('\\', '/', $to);

    $from     = explode('/', $from);
    $to       = explode('/', $to);
    $relPath  = $to;

    foreach($from as $depth => $dir) {
    // find first non-matching dir
    if($dir === $to[$depth]) {
    // ignore this directory
    array_shift($relPath);
    } else {
    // get number of remaining dirs to $from
    $remaining = count($from) - $depth;
    if($remaining > 1) {
    // add traversals up to first matching dir
    $padLength = (count($relPath) + $remaining - 1) * -1;
    $relPath = array_pad($relPath, $padLength, '..');
    break;
    } else {
    $relPath[0] = './' . $relPath[0];
    }
    }
    }
    return implode('/', $relPath);
    }
    ?>