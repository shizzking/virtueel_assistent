<?php
include("config.php");
$naam = $_POST['gebruiker'];
$ww = sha1($_POST['wachtwoord']);
$query = "SELECT user_id, username, password FROM users WHERE username = '".$naam."' AND password = '".$ww."'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
if($row['username'] == $naam && $row['password'] == $ww) {
    $_SESSION['user'] = $row['user_id'];
    header('Location: home.php');
}
else {
    echo '<p>Gebruikersnaam of password waren incorrect</p>';
    header('location: home.php');
}
