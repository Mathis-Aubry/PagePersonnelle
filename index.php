<?php
    if ($_SERVER['REQUEST_URI'] == '/') {
        include 'home.php';
    } else {
        $projectName = $_SERVER['REQUEST_URI'] . '.html';
        if (file_exists($projectName)) {
            include 'projet.php';
        }
    } 
?>