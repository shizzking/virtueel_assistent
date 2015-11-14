<?php
include_once 'config.php';
include_once 'header.php';
?>
<link href="informatie_dienst.css" rel="stylesheet" type="text/css"/>



<!--<div id="search"> <input type="text" class="search" placeholder="Zoekt u iets?"></div>    -->
<div id="fit">        
    <section id="dienst_box">                            
        <div class="gcontent">
            <div class="dienst_head"><h1>Categorieën</h1></div>
                <div class="boxy">
                <?php                        
                    // Check connection
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }
                    $sql = "SELECT company_id, companyName, description, website, email, street, zipcode, phone, kvkNumber, btwNumber, avatar, categorie FROM company";
                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<table border='1' class='categorie'>";
                            echo "<tr><td class='catrow'>Name: </td><td class='catrowB'>" . ucwords($row["companyName"]). "</td></tr>";
                            echo "<tr><td class='catrow'>Website: </td><td class='catrowB'>" . $row["website"] . "</td></tr>";
                            echo "<tr><td class='catrow'>Sector: </td><td class='catrowB'>" . $row["categorie"] . "</td></tr>";
                            echo "<form action='overview.php' method='POST'>";
                            echo "<tr><td colspan='2' class='tableElementCenterdOut'><input hidden value=". $row['company_id'] . " name='id'><input class='moreInfo' value='Toon meer informatie' type='submit'></td></tr>";
                            echo "</form>";
                            echo "</table>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $db -> close();
                ?>    
                </div>
        </div>
    </section>
</div>
                
