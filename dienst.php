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
                        $query = "SELECT * FROM company LEFT JOIN diensten on categorie_ID = diensten.ID";
//                        $sql_c = "SELECT * FROM users LEFT JOIN company ON users.company_id = company.company_id WHERE user_id = '$id'";
                        $result_2 = $db->query($query);
                        $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<table border=1>";
                            echo "<tr><td>ID: </td><td>" . $row["company_id"]. "</td></tr>";
                            echo "<tr><td>Name: </td><td>" . $row["name"]. "</td></tr>";
                            echo "<tr><td>Description: </td><td>" . $row["description"]. "</td></tr>";
                            echo "<tr><td>Sector: </td><td></td></tr>";
                            echo "</table>";
                        }
                    } else {
                        echo "0 results";
                    }
                    
                    if($result_2->num_rows> 0){
                        while ($row_2 = $result_2->fetch_assoc()){
                            echo $row_2['sector'];
                    }
                    }
                    $db -> close();
                ?>    
                </div>
        </div>
    </section>
</div>
                
