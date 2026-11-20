
<?php

// Importer le fichier de traitement
require_once "traitement/traitement.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- HEADER -->
    <header>

        <div class="logo">Chahid Mahfoudi</div>

        <nav>
            <a href="#home">Accueil</a>
            <a href="#about">À propos</a>
            <a href="#skills">Compétences</a>
            <a href="#projects">Projets</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>

    <main>

        <!-- SECTION ACCUEIL -->
        <section class="hero" id="home">

            <div class="hero-content">

                <div>

                    <p>BIENVENUE SUR MON PORTFOLIO</p>

                    <h1>Bonjour, je suis Chahid Mahfoudi</h1>

                    <h2>Développeur Web & Mobile Junior</h2>

                    <p>
                        Je suis passionné par le développement web
                        et la création de solutions digitales modernes.
                        Actuellement en formation à Solicode.
                    </p>

                    <a href="#projects" class="btn">
                        Découvrir mes projets
                    </a>

                </div>

                <img
                    src="images/profile.png"
                    alt="Photo de profil de Chahid Mahfoudi"
                    class="profile-image"
                >

            </div>

        </section>

        <!-- SECTION À PROPOS -->
        <section id="about">

            <h2 class="section-title">À propos de moi</h2>

            <p class="centre">
                Je m'appelle Chahid Mahfoudi.
                Je suis apprenant en développement Web et Mobile
                à Solicode. J'aime apprendre de nouvelles
                technologies, résoudre des problèmes et créer
                des projets utiles et créatifs.
            </p>

        </section>

        <!-- SECTION COMPÉTENCES -->
        <section id="skills">

            <h2 class="section-title">Mes compétences</h2>

            <ul class="skills-content">

                <li class="skill">HTML</li>
                <li class="skill">CSS</li>
                <li class="skill">JavaScript</li>
                <li class="skill">Git</li>

            </ul>

        </section>

        <!-- SECTION PROJETS DYNAMIQUE -->
        <section id="projects">

            <h2 class="section-title">Mes projets</h2>

            <p class="centre">
                Nombre de projets :
                <?= $totalProjets ?>
            </p>

            <div class="projects-container">

                <?php if ($totalProjets > 0): ?>

                    <?php foreach ($projetsAffiches as $projet): ?>

                        <div class="project">

                            <h3 class="centre">
                                <?= htmlspecialchars($projet["titre"]) ?>
                            </h3>

                            <p class="centre">
                                <?= htmlspecialchars($projet["description"]) ?>
                            </p>

                            <p class="centre">
                                Technologies :
                                <?= htmlspecialchars(
                                    implode(", ", $projet["technologies"])
                                ) ?>
                            </p>

                            <?php if ($projet["statut"] === "Terminé"): ?>

                                <p class="centre termine">
                                    Projet terminé
                                </p>

                            <?php else: ?>

                                <p class="centre encours">
                                    Projet en cours
                                </p>

                            <?php endif; ?>

                        </div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <p class="centre">
                        Aucun projet disponible pour le moment.
                    </p>

                <?php endif; ?>

            </div>

        </section>

        <!-- SECTION CONTACT -->
        <section class="contact" id="contact">

            <h2 class="section-title">Contactez-moi</h2>

            <p class="centre">
                Vous souhaitez échanger avec moi
                ou collaborer sur un projet ?
            </p>

            <p class="centre">
                Email : Votre adresse email
            </p>

        </section>

    </main>

    <!-- FOOTER -->
    <footer>

        <p class="centre">
            © 2026 Chahid Mahfoudi
        </p>

    </footer>

</body>
</html>
