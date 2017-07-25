<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 9/27/2016
 * Time: 10:44 PM
 */
require "page.inc";
$homepage = new Page();

$homepage->content = "<h1 style='color: black'>Here is what I can do for you!</h1>
<ul>
    <li>Be Awesome</li>
    <li>Make Web Pages</li>
    <li>Program Applications</li>
    <li>Make 3D Models</li>
    <li>Write Plugins for Minecraft</li>
    <li>Exist</li>
    <li>Normalize Databses</li>
</ul>";

$homepage->Display();

?>