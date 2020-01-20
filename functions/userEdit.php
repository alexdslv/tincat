<?php

    var_dump($_POST["pseudo"]);
    var_dump($_POST["id"]);

    require("database.php");

    $pseudo = $_POST['pseudo'];
    $id = $_POST['id'];

    if(empty($_POST['pseudo'])){
        $messagepseudo = "Nouveau Pseudo";
        header("Location: ../userEditForm.php?message=$messagepseudo");   
    }
    
