<?php
include_once('../header.php');

include_once('settingScript.php');
?>

<body>
<form action="settingScript.php" method="post">
    <input type="submit" name="stly" value="dark" />
    <input type="submit" name="stly" value="flashbang" />
    <input type="submit" name="stly" value="default" />
</form>
</body>
<br />
<?php
include_once('footer.php');
?>