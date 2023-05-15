          <?php 
 //Nous allons démarrer la session avant toute chose
   session_start() ;
  if(isset($_POST['boutton-envoyer'])){ // Si on clique sur le boutton , alors :
    //Nous allons verifiér les informations du formulaire
    if(isset($_POST['email']) && isset($_POST['mdp'])) { //On verifie ici si l'utilisateur a rentré des informations
      //Nous allons mettres l'email et le mot de passe dans des variables
     
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];

  $formation = $_POST["formation"];
  $ville = $_POST["ville"];
  $email = $_POST["email"];
  $mdp = $_POST["mdp"];



      $email = $_POST['email'] ;

      $mdp = $_POST['mdp'] ;
      $erreur = "" ;
       //Nous allons verifier si les informations entrée sont correctes
       //Connexion a la base de données
       $nom_serveur = "localhost";
       $utilisateur = "root";
       $mot_de_passe ="";
       $nom_base_données ="jobb" ;
       $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
       //requete pour selectionner  l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrées
      
$result = mysqli_query($con, "SELECT * FROM etudiant WHERE email = '$email' AND mdp= '$mdp' ");
if ($result) {
    $num_ligne = mysqli_num_rows($result);
    // Reste du code...
} else {
    die(mysqli_error($con)); // Afficher l'erreur MySQL pour le débogage
}

if ($num_ligne > 0) {
    header("");
    $_SESSION['email'] = $email;
} else {
    $erreur = "Adresse Mail ou Mots de passe incorrectes !";
}

        }

  }
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="j.css">
</head>
<body>
   <section>
       <h1> Connexion</h1>
       <?php 
       if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
           echo "<p class= 'Erreur'>".$erreur."</p>"  ;
       }
       ?>
       <form action="" method="POST">  <!--on ne mets plus rien au niveau de l'action , pour pouvoir envoyé les données  dans la même page -->
          
             <label>Nom</label>
           <input type="text" name="nom">
           <label > Prenom</label>
           <input type="text" name="prenom">
            <label >Date De Naissance</label>
           <input type="text" name="Date De Naissance">
           <label > Formation</label>
           <input type="text" name="formation">
           <label > Ville</label>
           <input type="text" name="ville">
          
           <label>Adresse Mail</label>
           <input type="text" name="email">
           <label >Mots de Passe</label>
           <input type="text" name="mdp">
           <input type="submit" value="envoyer" name="boutton-envoyer">
       </form>
   </section> 
</body>
</html>

