<?php
// Etape 1 : config database
$DB_HOST = "localhost";
$DB_NAME = "tincat";
$DB_USER = "root";
$DB_PASSWORD = "";
// Etape 2 : Connexion to database
try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
var_dump($_POST);

$email = $_POST["email"];
$pseudo = $_POST["pseudo"];
$password = $_POST["password"];
$passwordbis = $_POST["passwordbis"];
$redirect = false;
// Avant d'insérer en base de données faire les vérifications suivantes

echo " | email: " . $email . " | pseudo: " . $pseudo . " | mot de passe: " . $password ;

    // Vérifier si le pseudo ou le mot de passe est vide
if ( empty( $email ) || empty( $pseudo ) || empty( $password ) ) {
        echo "Champs vides";
        $redirect = true;
    }

    // Ajouter un input confirm password et vérifier si les deux sont égaux

if ( "$password" !== "$passwordbis" ) {
        echo "Les mots de passe sont différents"; 
        $redirect = true;
    }


// Ajouter un champ email
//Done
// Etape 3 : prepare request
$req = $db->prepare("INSERT INTO users (emailUser, pseudo, password) VALUES(:emailUser, :pseudo, :password)");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->bindParam(":email", $email);
//
?>