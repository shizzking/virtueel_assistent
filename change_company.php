<?php
include_once 'config.php';
include_once 'authorized.php';

if(sizeof($_POST) > 0 ){
    $companyName = mysqli_real_escape_string($db, $_POST['companyName']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $website = mysqli_real_escape_string($db, $_POST['website']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $street = mysqli_real_escape_string($db, $_POST['street']);
    $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $kvkNumber = mysqli_real_escape_string($db, $_POST['kvkNumber']);
    $btwNumber = mysqli_real_escape_string($db, $_POST['btwNumber']);
    $id = $_SESSION["user"]->id;
   
    // Zet de nieuwe gegvens in de database
    $updateCompany = "UPDATE company SET companyName = '$companyName', description = '$description', website = '$website', email = '$email', street = '$street', zipcode = '$zipcode', phone = '$phone', kvkNumber = '$kvkNumber', btwNumber = '$btwNumber' WHERE company_id = " . $id; 
    // Slaat de gegevens op in de database
    $resultCompany_2 = mysqli_query($db,$updateCompany) or die(mysqli_error($db));
        
        if($resultCompany_2){
            echo "Uw gegevens zijn geupdate";
            header("refresh:4;url=profile.php");
        }
}