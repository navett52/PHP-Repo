<?php
/**
 * Created by PhpStorm.
 * User: LibStaff
 * Date: 10/25/2016
 * Time: 5:19 PM
 */
session_start();
define('TITLE', 'Registrations');
define('CSS', 'css/contentStyle.css');
include('templates/newHeader.html');

print '<h1>Registered Users</h1>';
print '<hr>';
$data = file('../registrations.txt');

foreach ($data as $value) {
    echo '<p>' . $value . '</p>';
    print '<hr>';
}

include "templates/footer.html";
?>