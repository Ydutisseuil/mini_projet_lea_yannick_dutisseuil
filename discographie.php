<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description"content="page qui contient tous les albums de nirvana">
    <title>Discographie</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/discographie.css">
    <link rel="icon" href="./favicon/favicon.ico">
</head>
<body class="background-poubelle">
    <nav class="nav">
        <div class="logo-container">
            <a href="index.php">
                <img class="logo_accueil" src="images/logo_accueil.png" alt="images/logo_accueil.png " class="image" > 
            </a>
        </div>
        <ul>
            <!-- <li><a href="index.php">Accueil</a></li> -->
            <li><a href="album-in-utero.php">Nirvana in utero</a></li>
            <li><a href="album-bleach.php">Nirvana Bleach</a></li>
            <li><a href="clip-video.php">video</a></li>
            <li><a href="discographie.php">Discographie</a></li>
        </ul>
    </nav>
    <header>
        <h1 class="discographie">DISCOGRAPHIE</h1>
    </header>
    <main>
        <div class="container">
            <section class="albums-section";>
                <div class="photo4">
                    <div class="image-text">
                        <img src="images/incesticide.jpg"alt="image">
                        <p> 
                            Sortie	14 décembre 1992
                            Enregistré	1988-1991
                            Durée	44:44
                            Genre	Grunge
                        </p>
                    </div>
                    <div class="image-text">
                        <img src="images/nevermind.jpg"alt="photo ">
                        <p>
                            Sortie	24 septembre 1991
                            Enregistré	2-19 mai 1991
                            Studios Sound City, Van Nuys
                            Durée	42:38
                            Genre	Grunge, rock alternatif
                        </p>
                    </div>
                    <div class="image-text">
                        <img src="images/nirvana_black.png"alt="photo ">
                        <p>
                            Sortie	29 octobre 2002
                            Enregistré	1988-1994
                            Durée	54:46
                            Genre	Grunge
                        </p>
                    </div>
                    <div class="image-text">
                        <img src="images/unplugged.jpg"alt="photo ">
                            <p>
                            Sortie	1er novembre 1994 (CD)
                            20 novembre 2007 (DVD)
                            Enregistré	18 novembre 1993
                            Studios Sony Music, New York États-Unis
                            Durée	53:50
                            Genre	Rock alternatif
                        </p>
                    </div>
                    <div class="image-text">
                        <img src="https://m.media-amazon.com/images/I/71eLqPemDvS._UF1000,1000_QL80_.jpg" alt="photo untero">
                        <p>
                            Sortie	 13 septembre 1993
                            21 septembre 1993
                            Enregistré	13-26 février 1993
                            Studio Pachyderm, Cannon Falls (Minnesota), États-Unis
                            Durée	41:11
                            Genre	Grunge, rock altern
                        </p>
                    </div>
                    <div class="image-text">
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/a1/Nirvana-Bleach.jpg "alt="photo ">
                        <p>
                            Sortie	15 juin 1989
                            Enregistré	24, 29, 30 et 31 décembre 1988
                            14 et 24 janvier 1989
                            Reciprocal Recording, Seattle États-Unis
                            Durée	42:38
                            Genre	Grunge, Rock indépendant, Punk Rock
                        </p>
                    </div>
                </div>
            </section>
            <!-- </div> -->
            <!-- Formulaire -->
            <section class="formulaire">
                <div class="container-formulaire">
                    <form action="traitement.php" method="post">
                        <h3>Enquette sur temps d'écoute de musique</h3>
                        <label for="nom">Nom :</label><br>
                        <input type="text" id="nom" name="nom"><br>

                        <label for="prenom">Prénom :</label><br>
                        <input type="text" id="prenom" name="prenom"><br>

                        <label for="email">Email :</label><br>
                        <input type="email" id="email" name="email"><br><br>

                        <label>temps écoute de musique par jours:</label><br>
                        <select name="temps" id="temps">
                            <option value="">--Choisissez une option--</option>
                            <option value="+12h_par_jours">+12h par jours</option>
                            <option value="+6h_par_jours">+6h par jours</option>
                            <option value="-3h_par_jours">-3h par jours</option>
                            <option value="-1h_par_jours">-1h par jour</option>
                            <option value="-1h_par_semaine">-1h par semaine</option>
                        </select>
                        
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </section>
        </div>
    </main>
    <footer class="blanc">
        <img class="ecole"src="images/école atypique.jpg"alt="images/école atypique.jpg">
        <p>
            © 2024 Site-crée-par-Dutisseuil-Yannick
        </p>
    </footer>
</body>
</html>