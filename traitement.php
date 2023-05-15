<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $formation = $_POST["formation"];
  $ville = $_POST["ville"];
  $email = $_POST["email"];
  $mdp = $_POST["mdp"];
$datedenaissance= $_POST["datedenaissance"];

  $nom_serveur = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "";
  $nom_base_donnees = "jobb";
  $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

  if (empty($nom) || empty($prenom) || empty($formation) || empty($ville) || empty($email) || empty($mdp)|| empty($datedenaissance)) {
    echo "Veuillez remplir tous les champs.";
  } else {
    // Requête SQL d'insertion des données dans la table etudiant
    $sql = "INSERT INTO etudiant (nom, prenom, formation, ville, email, mdp,datedenaissance) VALUES ('$nom', '$prenom', '$formation', '$ville', '$email', '$mdp',
      '$datedenaissance')";

    if (mysqli_query($con, $sql)) {
      echo "Formulaire soumis avec succès.";
    } else {
      echo "Erreur lors de l'insertion des données : " . mysqli_error($con);
    }
  }
}
?>


