<?php
include_once('../header.php');

?>

<form action="loginScript.php" method="post">
    Username: <input type="text" name="name" /><br />
    Password: <input type="text" name="pass" /><br />
    <input type="submit" />
</form>

<br />
<?php
include_once('../footer.php');
?>