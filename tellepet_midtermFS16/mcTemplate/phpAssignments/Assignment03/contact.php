<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 9/27/2016
 * Time: 10:39 PM
 */
require "page.inc";
$homepage = new Page();

$homepage->content = "<p>Here is my contact information!</p><p>E-Mail: tellepet@mail.uc.edu</p><p>Phone: 1-234-567-8901</p>";

$homepage->Display();

?>