<?php
include("config.php");
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}

if(isset($_POST)) {    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = sha1($_POST['password']);

    $query = "SELECT user_id, username, password FROM users WHERE username = '".$username."' AND password = '".$password."'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row['username'] == $username && $row['password'] == $password) {
        $user = new stdClass();
        $user->id = $row['user_id'];
        $user->username = $row['username'];
        $user->email = $row['email'];

        $_SESSION["user"] = $user;
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
    else {
    return false;}
}