<?php
include_once 'config.php';
include_once 'authorized.php';

if(sizeof($_POST) > 0 ){
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $function = mysqli_real_escape_string($db, $_POST['function']);
    $mob_tel = mysqli_real_escape_string($db, $_POST['mob_tel']);
    $vast_tel = mysqli_real_escape_string($db, $_POST['vast_tel']);
    $id = $_SESSION["user"]->id;
   
    if($mob_tel != '' && !preg_match("/^(((\\+31|0|0031)6){1}[1-9]{1}[0-9]{7})$/i", $mob_tel)){
        echo 'shit is invaled biatchh';
        return;
    }
    
    if($vast_tel != '' && !preg_match("/^(((0)[1-9]{2}[0-9][-]?[1-9][0-9]{5})|((\\+31|0|0031)[1-9][0-9][-]?[1-9][0-9]{6}))$/", $vast_tel)){
        echo 'shit is invaled biatchh';
        return;
    }
    // Zet de nieuwe gegvens in de database
    $update_profile = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', function = '$function', mob_tel = '$mob_tel', vast_tel = '$vast_tel' WHERE user_id = " . $id; 
    // Slaat de gegevens op in de database
    $result = mysqli_query($db,$update_profile) or die(mysqli_error($db));
    if($result){
        echo "Uw gegevens zijn geupdate";
        header("refresh:4;url=profile.php");
    }
};
?>

