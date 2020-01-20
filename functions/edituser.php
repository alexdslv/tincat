<?php
    echo "Edit User";

    // 1 : connect to database
    require("database.php");

    //new pseudo
    var_dump($_POST["newPseudo"]);
    var_dump($_POST["user_id"]);


    $req = $db->prepare("UPDATE users SET pseudo = :newPseudo WHERE id = :user_id");


    //bindParam (id, newPseudo)
    $req->bindParam(":newPseudo" , $_POST["newPseudo"]);
    $req->bindParam(":user_id" , $_POST["user_id"]);



    
    //execute
    $req->execute();

    //header Location : on redirige l'utilisateur vers la page profils
    header("location:../profils.php");