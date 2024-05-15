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

// Exécuter une requête SELECT
$sql = "SELECT * FROM groupe_nirvana";
$resultat = mysqli_query($connexion, $sql); 

// Vérifier si la requête a réussi 
  if ($resultat) {
     print_r($resultat); 
} else { 
    echo "Erreur : " . mysqli_error($connexion);
 } 

 // Fermer la connexion
mysqli_close($connexion);
?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="fiche de renseignement sur album de nirvana Bleach">
    <title>NIRVANA BLEACH</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico">
</head>
<body class="background-page-1">
    <nav class="nav">
        <div class="logo-container">
                <a href="index.html">
                    <img class="logo_accueil" src="images/logo_accueil.png" alt="images/logo_accueil.png " class="image" > 
                </a>
        </div>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="album-in-utero.html">Nirvana in utero</a></li>
            <li><a href="album-bleach.php">Nirvana Bleach</a></li>
            <li><a href="clip-video.html">video</a></li>
        </ul>
    </nav>
    <header>
        <h1 class="titre2">NIRVANA Bleach</h1>
    </header>
    <main>
        <section>
            <div class="bloc2">
                <div class="texte2">
                    <div class="photo2">
                        <img class="Nirvana-Bleach" src="https://upload.wikimedia.org/wikipedia/en/a/a1/Nirvana-Bleach.jpg "alt="photo ">
                    </div>
                    <h2 class="album-bleach">
                        Album Bleach
                    </h2>
                    <ol style="text-align: right;"></ol>
                    <ol class="liste-audio">
                        <?php
                            if ($resultat->num_rows > 0) {
                                foreach($resultat as $chanson){
                                    echo '<li>                                        
                                            <div class="lecteur-audio">
                                                <audio controls src="'. $chanson["url"] .'"></audio>  
                                                <p style="text-decoration: underline;">'. $chanson["titre"] .'</p>
                                            </div>
                                        </li>';
                                }
                            }
                        ?>
                        
                    </ol>
                </div>
            </div> 
            <div class="test2">       
                <h2 class="Description2">
                Description:
                </h2>
                <p>
                    Le 15 juin 1989 sortait le premier album de Nirvana. Aujourd'hui Bleach a 26 ans.
                    Aujourd’hui est un jour particulier pour les fans de Nirvana, puisque le groupe fête le 26e anniversaire de leur premier album studio Bleach.
                    26 ans déjà, oui, que le monde faisait la connaissance d’un petit groupe proposant un opus grunge sans prétention qui s’est vendu à plus de 1,7 millions d’exemplaires outre-Atlantique et à plus de 200 000 en France.
                </p>
            </div>
        </section1>
    </main>
<footer class="blanc">
    <p>
        © 2024 Site-crée-par-Dutisseuil-Yannick
    </p>
</footer>
</body>
</html>