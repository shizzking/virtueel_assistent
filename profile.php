<?php 
    include_once 'header.php'; 
    include_once 'authorized.php';
    
    // Informatie over de ingelogde gebruiker ophalen
    $id = $_SESSION["user"]->id;
    
    $query = "SELECT * FROM users WHERE user_id = '$id'"; // Haalt het alles van de user op
    $result = mysqli_query($db, $query) or die(mysqli_error($db)); // voert de query uit
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // Zet het om naar een array
    $row['fullname'] = $row['firstname'] . " " . $row['lastname'];    
?>

<div id="content" class="clearfix">
    <section id="left">
        <div id="userStats" class="clearfix">   
            <div class="pic">
                <a href="#"><img src="img/<?php echo $row['avatar'] != '' ? $row['avatar'] : "default_profile_pic.png" ?>" width="150" height="150" /></a>
            </div>

            <div class="data">
                <h1>Naam: <?php echo strlen($row['fullname']) > 1 ? $row['fullname'] : $row['username']; ?></h1>
                <h3>Bedrijf: TODO: Implement</h3>
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
            <div class="head"><h1>Profiel gegevens</h1></div>
            <div class="boxy">
                <p> Pas hier uw gegevens aan </p>
                <form action="change_profile.php" method="POST">
                    <table border="0" class="profile">
                        <tr><td>Voornaam: </td><td><input value="<?php echo $row['firstname'] != '' ? $row['firstname'] : ''; ?>" type="text" name="firstname" autofocus/></td></tr>
                        <tr><td>Achternaam: </td><td><input value="<?php echo $row['lastname'] != '' ? $row['lastname'] : ''; ?>" type="text" name="lastname"/></td></tr> 
                        <tr><td>Functie: </td><td><input value="<?php echo $row['function'] != '' ? $row['function'] : ''; ?>" type="text" name="function"/></td></tr> 
                        <tr><td>Mobiel: </td><td><input value="<?php echo $row['mob_tel'] != '' ? $row['mob_tel'] : ''; ?>" type="number" name="mob_tel" maxlength="10"/></td></tr> 
                        <tr><td>Telefoon: </td><td><input value="<?php echo $row['vast_tel'] != '' ? $row['vast_tel'] : ''; ?>" type="number" name="vast_tel" maxlength="10"/></td></tr> 
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
            <a href="#"><img src="img/<?php if (isset($_SESSION['user']) && $row['avatar'] != '') {echo $row["avatar"];} else {echo"default_company_picture.jpg";} ?>" width="150" height="150" /></a>
        </div>

        <div class="data">
            <h1>Naam: <?php // if (isset($_SESSION['user'])) {echo ucwords($row["company_name"]);} ?></h1>
            <h3>Rol: binnen in het bedrijf</h3>
            <h4><a href="#">Websitenaam</a></h4>
            <div class="sep"></div>
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
            <div class="head"><h1>Bedrijfs gegevens</h1></div>
            <div class="boxy">
                <p>Voeg hier uw bedrijfsgegevens toe!</p>
                    <form action="change_company.php" method="POST">
                        <table border="0">
                            <tr><td>Bedrijfsnaam: </td><td><input value="" type="text" name="name" autofocus/></td></tr>
                            <tr><td>Omschrijving: </td><td><input value="" type="text" name="description"/></td></tr> 
                            <tr><td>Website: </td><td><input value="" type="text" name="website"/></td></tr> 
                            <tr><td>Email: </td><td><input value="" type="text" name="email" maxlength="10"/></td></tr> 
                            <tr><td>Street: </td><td><input value="" type="text" name="street" maxlength="10"/></td></tr> 
                            <tr><td>Postcode: </td><td><input value="" type="text" name="zipcode" maxlength="6"/></td></tr> 
                            <tr><td>Telefoonnummer: </td><td><input value="" type="number" name="phone" maxlength="10"/></td></tr> 
                            <tr><td>KVK nummer: </td><td><input value="" type="number" name="kvkNumber" maxlength="8"/></td></tr>
                            <tr><td>BTW nummer: </td><td><input value="" type="text" name="btwNumber" maxlength="14"/></td></tr> 
                            <tr></tr>
                            <tr><td></td><td><input type="submit"></td></tr> 
                        </table>
                    </form>             
            </div>
        </div>
    </section>

    </section>
