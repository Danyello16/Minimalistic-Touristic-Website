<!-- Navbar -->

<!-- TODO !!!
    1) Anzeige der Buttons Login, Logout, Username je nach aktuellem Status (anoynm, eingeloggt)
    2) Anzeige der Menüpunkte je nach aktuellem Status (anonym, user, admin)
    3) gerade aktuellen Menüpunkt auf "active" setzen
-->


<!-- eigentliche Navbar -->
<div class="navbar sticky-top  navbar-expand-md navbar-dark bg-dark">
 
    <!-- Logo bzw. fixer Menütext -->
    <a class="navbar-brand" href="#">Produkt-Shop</a>


    <!-- Menüpunkte und Burgermenü samt Funktionalität -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           

            <?php if(isset($_SESSION['user_loggedin']) and  $_SESSION['user_loggedin'] == 1 and $_SESSION['is_admin'] == 1): ?>
                <li class="nav-item">
                    <a class="nav-link" href="./inc/page.home.inc.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Produkte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./inc/page.admin.inc.php">Admin</a>
                </li>
            <?php elseif(isset($_SESSION['user_loggedin']) and  $_SESSION['user_loggedin'] == 1 and $_SESSION['is_admin'] == 0):  ?>
                <li class="nav-item">
                    <a class="nav-link" href="./inc/page.home.inc.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Produkte</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
            <?php endif; ?>
         </ul>

        <!-- Warenkorb -->
        <div class="navbar-text">

            <div class="basket-col">
                <a href=#><img class="basket" src="res/img/warenkorb_hell.png" alt=""></a>
            </div>
        </div>

        <!-- Login-Button / Logout-Button / Anzeige des eingeloggten Usernamens -->
        <!-- Button Login trigger modal -->
        <?php if(isset($_SESSION['user_loggedin']) and  $_SESSION['user_loggedin'] == 1 and $_SESSION['is_admin'] == 1): ?>
            <p style="color:white;">admin</p>
        <?php elseif(isset($_SESSION['user_loggedin']) and  $_SESSION['user_loggedin'] == 1 and $_SESSION['is_admin'] == 0):  ?>
            <p style="color:white;">user</p>
        <?php else: ?>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                Login
            </button>
        <?php endif; ?>
        <!-- hier Anzeige für Username einfügen -->
        <!-- Button Logout -->
        <?php if(isset($_SESSION['user_loggedin']) and  $_SESSION['user_loggedin'] == 1): ?>
            <button type="submit" name="logout" class="btn btn-warning btn-sm">
                Logout
            </button>
        <?php endif; ?>


    </div>

</div>
