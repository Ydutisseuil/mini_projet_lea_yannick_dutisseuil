<?php 

// Paramètres de connexion 
$serveur = "localhost"; 
$utilisateur = "root"; 
$mot_de_passe = "";
$base_de_donnees = "chansons_nirvana";

// Établir la connexion 
 $connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Vérifier la connexion 
if (!$connexion) { 
     die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données.";

} 


// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$temps_ecoute = isset($_POST['temps']) ? $_POST['temps'] : '';

// Requête d'insertion des données
$sql = "INSERT INTO utilisateur (nom, prenom, email, temps_ecoute)
VALUES ('$nom', '$prenom', '$email', '$temps_ecoute')";

// Exécution de la requête d'insertion
mysqli_query($connexion,$sql);
}
header("Location: discographie.php");


// Fermer la connexion
?>