<?php
include_once 'header.php';
?>

<nav>
    <ul id="n" class="clearfix">
        <li class="sel"><a href="#">Home</a></li>
        <li><a href="profiel.php">Profiel</a></li>
        <li><a href="informatie.php">Informatie</a></li>
        <li><a href="dienst.php">Dienst</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <?php 
        if(isset($_SESSION['user'])){
            $query = "SELECT user_id, username, password FROM users WHERE user_id = '".$_SESSION['user']."'";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_array($result);
            echo "<p id='gebruiker'>".ucwords($row["user_name"])."</p>";
        }
        if(!isset($_SESSION['user'])) {
            echo '
                <form class="login_form" action="login.php" method="post">
                    <button type="submit"><img src="../img/login_icon.png" width="30px" height="30px"></button>
                    <input type="text" name="gebruiker" placeholder="Gebruikersnaam">
                    <input type="password" name="wachtwoord" placeholder="Wachtwoord">
                    <a href="#">Registreren</a>
                </form>';
        }
    ?>
    
</nav>


<div id="content" class="clearfix">