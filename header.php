<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta charset="utf-8" />
        <title>pagina</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="slideshow.css" />
        <link href="responsive.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script src="jquery.blueberry.js"></script>
        <script src="script.js"></script>
    </head>

    <body onload="nav_select()">	
        <header>
            <div class="wrapper">
            </div>
        </header>
        <nav>
            <ul id="n" class="clearfix">
                <li class="nav_elem" class="sel"><a href="index.php">Home</a></li>
                <li class="nav_elem"><?php if(isset($_SESSION['user'])){ echo'<a href="profile.php">Profiel</a>';} ?></li>
                <li class="nav_elem"><a href="informatie.php">Informatie</a></li>
                <li class="nav_elem"><a href="dienst.php">Dienst</a></li>
                <li class="nav_elem"><a href="contact.php">Contact</a></li>
            </ul>
            <?php if(isset($_SESSION['user'])): ?>
                <form action='login.php' method='post' class="accountLogged">
                    <p id='username'>Welkom <?php echo ucwords($_SESSION['user']->username); ?>
                        <button id='logout' class="logoutButton"type='submit'><img src='img/logout_icon.png' width='30px' height='30px'></button>
                    </p>
                </form>
            <?php else: ?>
                <form class="login_form" action="login.php" method="post">
                    <button type="submit"><img src="img/login_icon.png" width="30px" height="30px"></button>
                    <input type="text" name="username" placeholder="Gebruikersnaam">
                    <input type="password" name="password" placeholder="Wachtwoord">
                    <a href="register.php" class=register>Registreren</a>
                </form>
            <?php endif; ?>
        </nav>
        
        

