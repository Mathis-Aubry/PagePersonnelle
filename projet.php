<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Mathis Aubry">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Page personnelle de Mathis Aubry">

        <title>Mathis Aubry | Projet Alizon</title>

        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/icomoon.css">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <script src="script/main.js"></script>
    </head>
    <body>
        <?php include 'header.html' ?>
        <main>
            <?php 
                $valid = true;
                if (count($_GET) == 1) {
                    $project = array_keys($_GET)[0];
                    if ($_GET[$project] == "") {
                        $files = scandir("projets/");
                        foreach ($files as $file) {
                            if ($file == $project.".html") {
                                include "projets/".$file;
                            }
                        }
                    }
                }
            ?>
        </main>
        <?php include 'footer.html' ?>
    </body>
</html>