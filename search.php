<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $domain = $_POST["domain"];
  $vill= $_POST["vill"];
   $nom= $_POST["nom"];
  $nom_serveur = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "";
  $nom_base_donnees = "jobb";
  $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

  if (empty($domain) || empty($vill)|| empty($nom) ) {
    echo "Veuillez remplir tous les champs.";
  } else {
    // Requête SQL d'insertion des données dans la table opportunities
    $sql = "INSERT INTO opportunities (domain, vill,nom) VALUES ('$domain', ' $vill',' $nom')";

    if (mysqli_query($con, $sql)) {
      echo "Formulaire soumis avec succès.";
    } else {
      echo "Erreur lors de l'insertion des données : " . mysqli_error($con);
    }
  }
}
?>
