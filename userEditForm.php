<?php require "head.php"; ?>


<body>
    <div>
        <strong> <?php echo $_GET["pseudo"];?> </strong>

        <form action="functions/userEdit.php" method="post">
            <p>Editer Pseudo</p>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
            <input type="text" name="pseudo" value="<?php echo $_GET["pseudo"]; ?>">
            <input type="submit" value="Modifier">
        </form>


    </div>git 


</body>