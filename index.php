<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robin THOMAS</title>
    <link href="https://fonts.googleapis.com/css?family=Overpass:400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body class="accueil">
    <nav>
        <ul>
            <li><a class="active" href="/">A propos</a></li>
            <!-- <li><a href="/creations.html">Créations</a></li> -->
            <li><a href="/contact.html">Contact</a></li>
        </ul>
    </nav>
    <header>
        <h1>Bonjour, je suis <span class="bold accent-color">Robin THOMAS</span>, <br><span class="accent-color">développeur web full stack</span>, <br>et passionné d'informatique !</h1>
    </header>
    <main>
        <section class="container presentation">
            <p>Je me suis formé au développement à l'IUT de Laval, d'abord lors d'un DUT, puis lors d'une licence professionnelle. J'aime trouver des moyens pour améliorer la <strong>qualité</strong> de mon code, et je recherche toujours la satisfaction de suivre les <strong>bonnes pratiques</strong>. Je suis quelqu'un de très curieux, j'aime comprendre comment les choses fonctionnent, que ce soit dans le domaine de l'informatique ou dans des domaines tels que la mécanique.</p>
            <div class="qualites-container">
                <div class="qualite">
                    <div class="qualite-losange">
                        <span>PASSION</span>
                    </div>
                    <div>
                        <p>Les nouvelles technologies me passionnent, j'aime ce domaine en partie parce qu'il évolue chaque jour. C'est pourquoi j'effectue une veille technologique régulière.</p>
                    </div>
                </div>
                <div class="qualite">
                    <div class="qualite-losange">
                        <span>RIGUEUR</span>
                    </div>
                    <div>
                        <p>La rigueur fait partie de mon ADN, j'ai besoin de faire les choses dans les règles de l'art, j'essaye de ne jamais laisser aucun détail au hasard.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <h2>Mes Créations</h2>
            <div class="projet-container">
                <div class="projet-teaser">
                    <div class="content">
                        <picture>
                            <img src="images/creations/projet-p2.jpg" alt="Capture d'écran de ma webapp sur l'oenologie"/>
                        </picture>
                        <p class="description">Webapp ayant pour but de promouvoir l'oenologie dans les Pays de la Loire, développée en équipe lors de ma licence</p>
                    </div>
                    <a href="" target="blank">Consulter le site</a>
                </div>
                <div class="projet-teaser">
                    <div class="content">
                        <picture>
                            <img src="images/creations/castelartcom.jpg" alt="Capture d'écran du site de l'association castelartcom"/>
                        </picture>
                        <p class="description">Site de l'association des commercants de la ville de Châteaubourg</p>
                    </div>
                    <a href="https://www.castelartcom.fr" target="blank">Consulter le site</a>
                </div>
                <div class="projet-teaser">
                    <div class="content">
                        <picture>
                            <img src="images/creations/garden-equipment.jpg" alt="Capture d'écran du site e-commerce Garden Equipment"/>
                        </picture>
                        <p class="description">Site de vente en ligne d'accessoires de jardinage développé avec Drupal Commerce.</p>
                    </div>
                    <a href="https://www.garden-equipment.fr/fr" target="blank">Consulter le site</a>
                </div>
                <div class="projet-teaser">
                    <div class="content">
                        <picture>
                            <img src="images/creations/kangouroukids.jpg" alt="Capture d'écran du site de Kangouroukids"/>
                        </picture>
                        <p class="description">Site de Kangouroukids, sur lequel j'ai effectué de nombreux travaux de maintenance durant mon année à Blue2i.</p>
                    </div>
                    <a href="https://www.kangouroukids.fr" target="blank">Consulter le site</a>
                </div>
            </div>
        </section>
        <section class="container" id="contact">
            <form action="" method="POST">
                <input type="text" name="email">
                <input type="text" name="content">
                <input type="submit">
            </form>
        </section>
    </main>
</body>
</html>
<?php

require_once("config.php");

if(isset($_POST['email'],$_POST['content'])){
    $destination = $config['emailTo'];
    $sender = $_POST['email'];
    $subject = "Contact de " .$sender;
    $content = $_POST['content'];
    mail($destination, $subject, $content, 'From:'.$sender);
}

?>
