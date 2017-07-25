<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 9/27/2016
 * Time: 9:52 PM
 */
require "page.inc";
$homepage = new Page();

$homepage->content = "<p>Welcome! My name is Evan, awesome person extraordanaire!</p><p>This is my website where you can find Contact Info, Services, and my Resume!</p>";

$homepage->Display();

?>