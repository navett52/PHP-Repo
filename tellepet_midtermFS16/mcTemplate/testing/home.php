<?php
/**
 * Created by PhpStorm.
 * User: LibStaff
 * Date: 9/27/2016
 * Time: 5:52 PM
 */
require "page.inc";
$homepage = new Page();

$homepage->content = "<h1>Assignment 03 Homepage</h1><p>Welcome to my assignment03 homepage made using Object Oriented PHP.<br/>I think this concept is actually really cool.<br/>It allows you to set even more of a base design than just using templates.<br/>This can allow your pages have even more of a similar feel.</p>";

$homepage->Display();

?>