<?php
include "fb-init.php";
if(isset($_SESSION['accessToken'])){
?>

<a href="logout.php">Logout</a>
<?php
}
else{
?>
<a href="<?= $login_url?>">Login with facebook</a>
<?php
}
?>