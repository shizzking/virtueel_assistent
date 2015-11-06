<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>pagina</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
    <?php if($_SESSION != null && $_SESSION["user"] != null): ?>
    <header>
        <div class="wrapper">
        </div>
    </header>

    <nav>
        <ul id="n" class="clearfix">
            <li><a href="home.php">Home</a></li>
            <li class="sel"><a href="#">Profiel</a></li>
            <li><a href="informatie.php">Informatie</a></li>
            <li><a href="#">Dienst</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
	
    <div id="content" class="clearfix">
   
    <section id="left">
        <div id="userStats" class="clearfix">
            <div class="pic">
                <a href="#"><img src="#" width="150" height="150" /></a>
            </div>

            <div class="data">
                <h1><?php ?></h1>
                <h3>Bedrijf:klant</h3>
                <h4><a href="#">Websitenaam</a></h4>
                <div class="sep"></div>
                    <ul class="numbers clearfix">
                        <li>*functie*</li>
                        <li>iets</li>
                        <li class="nobrdr">iets</li>
                    </ul>
            </div>
        </div>
    <section id="space"></section>    
    <section id="middle">                            
        <div class="gcontent">
            <div class="head"><h1>Profiel aanpassen</h1></div>
                <div class="boxy">
                    <form action="change_profiel.php">
                        <table border="0" class="profile">
                            <tr><td>Voornaam: </td><td><input type="text" id="naam" autofocus/></td></tr>
                            <tr></tr>
                            <tr><td>Achternaam: </td><td><input type="text" id="achternaam"/></td></tr> 
                            <tr></tr>
                            <tr><td>Email: </td><td><input type="email" id="email"/></td></tr> 
                            <tr></tr>
                            <tr><td>Functie: </td><td><input type="text" id="functie"/></td></tr> 
                            <tr></tr>
                            <tr><td>Mobiel: </td><td><input type="number" maxlength="10"/></td></tr> 
                            <tr></tr>
                            <tr><td>Telefoon: </td><td><input type="number" maxlength="10"/></td></tr> 
                            <tr></tr>
                            <tr><td></td><td><input type="submit"></td></tr> 
                        </table>
                    </form>
                </div>
            </div>
    </section>                

    </section>
    
    <section id="middle">
        <div id="userStats" class="clearfix">
            <div class="pic">
                <a href="#"><img src="#" width="150" height="150" /></a>
            </div>
            <div class="data">
                <h1>Naam: Bedrijf</h1>
                <h3>Rol: binnen in het bedrijf</h3>
                <h4><a href="#">Websitenaam</a></h4>
                <div class="sep">
                </div>
                <ul class="numbers clearfix">
                    <li>iets?</li>
                    <li>iets?</li>
                    <li class="nobrdr">iets?</li>
                </ul>
            </div>
        </div>
   
    
    <section id="space"></section>
    <section id="right">                            
        <div class="gcontent">
            <div class="head"><h1>Gekoppelde accounts</h1></div>
            <div class="boxy">
                <p>Collega's - 00 totaal</p>

                <div class="friendslist clearfix">
                    <div class="friend">
                        <a href="#"><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Jerry K." /></a><span class="friendly"><a href="#">Jerry K.</a></span>
                    </div>

                    <div class="friend">
                        <a href="#"><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Katie F." /></a><span class="friendly"><a href="#">Katie F.</a></span>
                    </div>

                    <div class="friend">
                        <a href="#"><img src="img/friend_avatar_default.jpg" width="30" height="30" alt="Ash K." /></a><span class="friendly"><a href="#">Ash K.</a></span>
                    </div>
                </div>

                <span><a href="#">See all...</a></span>
            </div>
        </div>
    </section>
    <?php endif; ?>
 </body>
<?php
    
include_once 'footer.php';    

?>
