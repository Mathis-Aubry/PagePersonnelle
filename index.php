<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
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
            $pageTitle = 'Page Personnelle';
            $pageFile = 'home.php';
            if ($_SERVER['REQUEST_URI'] != '/') {
                // Routing all projects
                if (strpos($_SERVER['REQUEST_URI'], 'projets')) {
                    $projectName = substr($_SERVER['REQUEST_URI'], 1) . '.html';
                    if (file_exists($projectName)) {
                        $pageTitle = 'Projet ' . substr($_SERVER['REQUEST_URI'], 8);
                        $pageFile = $projectName;
                    } else {echo $projectName;}
                } else {echo 'dgf';}
            }
        ?>
        <title>Mathis Aubry | <?= $pageTitle ?></title>
    </head>
    <body>
        <?php include 'header.html' ?>
        <main>
            <?php include $pageFile ?>
        </main>
        <?php include 'footer.html' ?>
    </body>
</html>