<?php include('../../templates/newHeader.html') ?>
<div id="main">
<h1>Evan Tellep's Amazing Form Handling!</h1>
<form action="assignment01HandleForm.php" method="post"> <!-- using post method cause this is private data that needs to be securely transferred to the next page -->
    First Name:<br>
    <input type="text" name="fname"><br>
    Last Name:<br>
    <input type="text" name="lname"><br>
    E-mail:<br>
    <input type="email" name="email"><br>
    IGN:<br>
    <input type="text" placeholder="[I]n [G]ame [N]ame" name="inGameName"><br>
    Sex:<br>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Female<br>
    <input type="submit" name="submit" value="Submit">
</form>
</div>
<?php include('../../templates/footer.html') ?>