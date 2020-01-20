<?php
    echo "Edit User";
    require("database.php");

    //ID
    //new pseudo
    //Pour s'assurer que l'on recoit bien toute les informations via le formulaire

    var_dump($_POST);

    $req = $db->prepare("UPDATE users SET id = ? WHERE id = ?");

    $req->execute(["id"]);    
