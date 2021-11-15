<!-- Code für die Steuerung von Login / Logout -->

<!-- TODO
    hier wird überprüft, was von "außen" hereinkommt (GET, POST), um den Login bzw. Logout zu steuern
    rufen Sie "$db->checkLogin($username,$password)" zur Überprüfung der Login-Daten auf
-->

<?php
    if((isset($_POST['username']) and isset($_POST['password']))
    and (!empty($_POST['username']) and !empty($_POST['username']))) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $is_loggedin = $db->checkLogin($username, $password);

        if(!$is_loggedin) {
            echo '<div class="alert alert-danger" role="alert">username or password is wrong</div>';   
        }
    }
?>