<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="darkreader-lock">
        <meta name="author" content="Mathis Aubry">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Page personnelle de Mathis Aubry">
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/icomoon.css">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <script src="script/main.js"></script>
        <?php
            //Home page by default
            $pageTitle = 'Page Personnelle';
            $pageFile = 'home.html';

            // Testing if it's a project page
            if ($_SERVER['REQUEST_URI'] != '/') {
                $projectName = substr($_SERVER['REQUEST_URI'], 1);
                $projectFile = 'projets/' . $projectName . '.html';
                if (file_exists($projectFile)) {
                    $pageTitle = 'Projet ' . ucfirst($projectName);
                    $pageFile = $projectFile;
                }
            }
        ?>
        <title>Mathis Aubry | <?= $pageTitle ?></title>
    </head>
    <body>
        <header>
            <div>
                <div>
                    <a href="/">Page Personnelle de Mathis Aubry</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="/#home">Accueil</a></li>
                        <li><a href="/#skills">Compétences</a></li>
                        <li><a href="/#projects">Projets</a></li>
                        <li><a href="/#experiences">Expériences</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <a href="">
                    <i class="icon-list5"></i>
                </a>
            </div>
        </header>
        <main>
            <?php include $pageFile ?>
        </main>
        <footer id="contact">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>
            <div class="cleanWrap">
                <address>
                    <h3>Contact</h3>
                    <ul>
                        <li>
                            <a href="https://goo.gl/maps/rKc8L2kAbbKVLMAU9" target="_blank" rel="noopener noreferrer"><i class="icon-house"></i>&emsp;Lannion 22300</a>
                        </li>
                        <li>
                            <a href="https://iut-lannion.univ-rennes1.fr/" target="_blank" rel="noopener noreferrer"><i class="icon-study"></i>&emsp;IUT Lannion</a>
                        </li>
                    </ul>
                </address>
                <nav>
                    <h3>Navigation</h3>
                    <ul>
                        <li>
                            <a href="/#home">Accueil&emsp;<i class="icon-circles"></i></a>
                        </li>
                        <li>
                            <a href="/#skills">Compétences&emsp;<i class="icon-circles"></i></a>
                        </li>
                        <li>
                            <a href="/#projects">Projets&emsp;<i class="icon-circles"></i></a>
                        </li>
                        <li>
                            <a href="/#experiences">Expériences&emsp;<i class="icon-circles"></i></a>
                        </li>
                        <li>
                            <a href="#contact">Contact&emsp;<i class="icon-circles"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <p></p>
        </footer>
        <div id="loader-overlay">
            <div id="loader">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </body>
</html>
