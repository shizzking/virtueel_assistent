<?php 
if(!isset($_SESSION["user"])) {
    header('location: redirect.php');
}

