<?php
include_once 'config.php';
include_once 'authorized.php';

if(sizeof($_POST) > 0 ){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $website = mysqli_real_escape_string($db, $_POST['website']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $street = mysqli_real_escape_string($db, $_POST['street']);
    $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $kvkNumber = mysqli_real_escape_string($db, $_POST['kvkNumber']);
    $btwNumber = mysqli_real_escape_string($db, $_POST['btwNumber']);
    $id = $_SESSION["user"]->id;
    
    
    $sql_c = "SELECT * FROM users LEFT JOIN company ON users.company_id = company.company_id WHERE user_id = '$id'";
//  $update_company = "SELECT company SET name = '$name', description = '$description', website = '$website', email = '$email', street = '$street', zip = '$zipcode', phone = '$phone', kvkNumber = '$kvkNumber', btwNumber = '$btwNumber'";

    // Zet de nieuwe gegvens in de database
 
    // Slaat de gegevens op in de database
    $result = mysqli_query($db,$sql_c) or die(mysqli_error($db));
    if($result){
        echo "Uw gegevens zijn geupdate";
        header("refresh:4;url=profile.php");
    }
    
    
}


