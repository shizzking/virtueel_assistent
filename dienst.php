<?php
include_once 'config.php';
?>

<style>
    table{
        margin: 25px;
        
    }
    
    table > td.op{
        font-size: 20px
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
                    // Check connection
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }
                        $sql = "SELECT company_id, name, description FROM company";
                        $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<table border=1>";
                            echo "<tr><td class='op'>ID: </td><td>" . $row["company_id"]. "</td></tr>";
                            echo "<tr><td class='op'>Name: </td><td>" . $row["name"]. "</td></tr>";
                            echo "<tr><td>Description: </td><td>" . $row["description"]. "</td></tr>";
                            
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
                
