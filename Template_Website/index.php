<?php 
    /* index.php
       diese Seite wird immer wieder aufgerufen
    */
    /* TODO
       je nach ausgewähltem Menüpunkt soll der entsprechende Content eingebunden werden
    */
    
    session_start();
    
    // include and initialize DB class
    include "utility/DB.class.php";
    $db = new DB();

    // include code for login / logout
    include "model/loginLogout.inc.php";
    

   
    
    
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>WE-Prüfung</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <!-- Custom styles for this template -->
        <link href="res/css/mycss.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JavaScript -->
        <script src="./res/js/myjs.js"></script>
    </head>
    <body>
        
        

        <!-- --------------------------------------------------------------------------------------
        Teil 3 der Aufgabe (DB-Anbindung) 
        -->
        <!-- Navigationsbereich und Login Userinterface -->
        <nav> 
            <?php include "inc/nav.inc.php"; ?>
            <?php include "inc/loginUI.inc.php";?>
        </nav>

        <!-- Content-Bereich der Webseite -->
        <main>
            <!-- TODO
                ja nach ausgewähltem Menüpunkt soll der entsprechende Inhalt eingebunden werden
            -->
            <?php include "inc/page.produkte.inc.php"; ?>
        </main>

       <!-- -->

    </body>
</html>