<!--/**-->
<!--* User: Joey Seton-->
<!--* Date: 10-5-2020-->
<!--* Time: 10:00-->
<!--* File: opdracht61.php-->
<!--*/-->
<?php
include "../";
?>
<form method="post" action="checklogin.php">
    <label>Username </label>
    <input name="username" type="text"><br>
    <label>Password </label>
    <input name="password" type="password"><br>
    <input type="submit" name="verzend" value="verzend">
</form>
<?php

include "./Periode 4/Includes/footer.php";