<?php
include_once 'config.php';
?>

<style>
    table{
        margin: 25px;
    }
</style>
<div id="content" class="clearfix">


    <div id="search"> <input type="text" class="search" placeholder="Zoekt u iets?"></div>    

    <div id="fit">        
        <section id="dienst_box_1">                            
            <div class="gcontent">
                <div class="dienst_optie_1"><h1>Categorieën</h1></div>
                    <div class="boxy">
                        <?php
                            $sql = "SELECT company_id, company_name, company_description, company_categorie_ID, company_pic FROM company";
                            $query_categorie = "SELECT * FROM categorie";
                            $img_query = "SELECT company_pic FROM company";
                            
                            $result = mysqli_query($db, $sql);
                            $result_categorie = mysqli_query($db, $query_categorie);
             
                            
                                while($row_2 = mysqli_fetch_assoc($result_categorie)) {
                                    $categories[$row_2['categorie_ID']] = $row_2['categorie_naam'];
                                }
                               
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<table border='1'>";
                                    echo "<tr><td>id</td><td>" . $row["company_id"]. "</td></tr>";
                                    echo "<tr><td><b>Bedrijfsnaam</b> </td><td>" . $row["company_name"]. "</td></tr>";
                                    echo "<tr><td><b>Korte Bedrijfsomschrijving</b></td><td>" .$row["company_description"]. "</td></tr>";
                                    echo "<tr><td><b>Bedrijfs Categorie</b></td><td>".$categories[$row["company_categorie_ID"]]. " </td></tr>";
                                    echo "<tr><td><b>Bedrijfs logo</td><td>". $row["company_pic"] ."</td></tr>";
                                    echo "</table>";
                                }
                            }
                            else{
                                echo "0 results";
                            }
                            
                            mysqli_close($db);
                        ?>
                        <div class="ace">
                            <div id="cata_picture"></div>
                            <div id="cata_smart_info"></div>
                        </div>

                        <div class="ace">
                            <div id="cata_picture"></div>
                            <div id="cata_smart_info"></div>
                        </div>

                        <div class="ace">
                            <div id="cata_picture"></div>
                            <div id="cata_smart_info"></div>
                        </div>

                        <div class="ace">
                            <div id="cata_picture"></div>
                            <div id="cata_smart_info"></div>
                        </div>
                    </div>
            </div>

        </section>

<!--        <section id="dienst_box_2">                            
            <div class="gcontent">
                <div class="dienst_optie_2"><h1>Top 5 bedrijven</h1></div>
                <div class="boxy">
                    <p class="dienst_tekst_2">
                        In tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft één van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, "Lorem ipsum dolor sit amet..", komt uit een zin in sectie 1.10.32.
                        Het standaard stuk van Lorum Ipsum wat sinds de 16e eeuw wordt gebruikt is hieronder, voor wie er interesse in heeft, weergegeven. Secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" door Cicero zijn ook weergegeven in hun exacte originele vorm, vergezeld van engelse versies van de 1914 vertaling door H. Rackham.
                    </p>
                </div>
            </div>
        </section>        -->

    </div>