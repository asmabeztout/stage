<?php
session_start();

// Récupérer les informations de connexion
$nom = $_POST['nom_utilisateur'];
$mot = $_POST['mot_de_passe'];

// Vérifier les informations de connexion dans la base de données
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "jobb";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifier les informations de connexion
$sql = "SELECT * FROM admin WHERE nom_utilisateur = '$nom' AND mot = '$mot'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Informations de connexion valides, créer une session pour l'administrateur
    $_SESSION['admin'] = $nom;
    header("Location: votre_page_admin.php"); // Rediriger vers la page d'administration
} else {
    // Informations de connexion incorrectes
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}

// Fermer la connexion à la base de données
$conn->close();
?>

