<!--/**-->
<!--* User: Joey Seton-->
<!--* Date: 10-5-2020-->
<!--* Time: 10:00-->
<!--* File: checklogin.php-->
<!--*/-->
<?php
if ($_POST['username'] == 'Abu' && $_POST['password'] == 'bekend')
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: "welkom.php');
}
else {
// $message = "Ongeldige username/wachtwoord
// {$_POST['username']}, probeer het nog eens.";
    include "opdracht61.php";
}
?>

<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);
?>