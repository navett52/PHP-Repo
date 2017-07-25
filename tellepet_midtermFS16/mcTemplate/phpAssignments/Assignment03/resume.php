<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 9/27/2016
 * Time: 10:58 PM
 */
require "page.inc";
$homepage = new Page();

$homepage->content = "<h2>Student  -  Visionary  -  Innovator</h2>
<h3>Who I Am</h3>
<p>I am currently a student at the University of Cincinnati Clermont College. I am an active member of the IT Pros student organization.<br/>
 I have helped run and organize LAN parites, as well as Super Smash Borthers tournaments. I also am employed at the college's library,<br/>
  and have been active in giving feedback and ideas to upcoming renovations to the library.<br/>
 <br/>
I am working towards my associates degree in Information Technology. After I obtain my associates, I plan to transfer to Northern Kentucky University<br/>
 to pursue my bachelors degree in Computer Science. From there, I wish to start designing and creating video games.</p>
 <br/>
 <h3 style='text-align: center'>Hobbies</h3>
 <ul>
    <li>Minecraft: I help develop and administrate as well as write plugins for a Minecraft server.</li>
    <li>IT Pros: I am the Public Relations Officer for a Student Organization<br/>
    We use our tech knowledge to host fun events<br/>
    on campus and take trips to further our<br/>
    knowledge.</li>
    <li>3-D: I dabble in Blender creating 3D Models.</li>
</ul>";

$homepage->Display();

?>