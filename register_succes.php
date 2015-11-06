<?php

include_once 'config.php';
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['submit']))
{
    $errors      = Array();
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $password_check = $_POST['password_check'];
    
    $username   = mysqli_real_escape_string($db, $username);
    $email    = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $enc_password = SHA1($password);
    $password_check = SHA1($password_check);
   
    if($enc_password != $password_check){ 
        die("Your passwords must match!"); 
    }  
    
    // Moet langer zijn dan 8 characters
    if( strlen($password) < 6 ) {
        array_push($errors, "Wachtwoord is te kort.");
    }
    
    // Moet een cijfer bevatten
    if( !preg_match("#[0-9]+#", $password) ) {
        array_push($errors, "Wachtwoord moet een cijfer bevatten.");
    }
    
    if( !preg_match("#[A-Z]+#", $password) ) {
        array_push($errors, "Wachtwoord moet minimaal één hoofdletter bevatten.");
    }
    
    if( !preg_match("#\W+#", $password) ) {
        array_push($errors, "Wachtwoord moet een speciaal teken bevatten.");
    }     
           
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is niet correct"); 
    }

    // Handle errors
    if(sizeof($errors) > 0) {
        foreach($errors as $error) {
            echo $error . "<br />";
        }
        return;
    }
   
    $email = strtolower($email);
    $username = strtolower($username);
    $check = "SELECT email, username FROM users WHERE email='$email' OR username='$username'";
    $result = mysqli_query($db,$check);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(mysqli_num_rows($result) > 0) {
        if(strtolower($row["username"]) == $username) {
            echo "Gebruikersnaam is in gebruik.";
        }
        if(strtolower($row["email"]) == $email) {
            echo "E-mail adres is in gebruik.";
        }
    } else {
        $query = mysqli_query($db, "INSERT INTO users (username, password, email) VALUES ('$username', '$enc_password', '$email')") or die(mysqli_error($db));
        if($query) {
            echo "Thank You! you are now registered.";     
            header( "refresh:4;url=home.php" );
        }
    } 
}
?>