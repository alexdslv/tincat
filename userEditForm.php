<?php
    require("head.php");


    //Récupérer l'ID
    var_dump($_GET);
?>


<body>
    <div class="form-container">
        <form action="functions/editUser.php" method="post">
            <p>Changer de pseudo</p>
            <input type="text" name="newPseudo">
            <input type="hidden" name="user_id" value="<?php echo $_GET["user_id"]?> ">
            <input type="submit" value="Modifier">
        </form>
</body>