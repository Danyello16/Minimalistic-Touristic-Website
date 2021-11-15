<?php


class DB {

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbname = "produktverwaltung";
    private $conn = null;

    // Daten zu Testzwecken, wie sie sonst von der DB eingelesen werden
    private $dbData = '
                      [{"produktID":1,
                         "dateiname":"p1.jpg",
                         "titel":"Smartphone",
                         "beschreibung":"Galaxy S9 mit herausragender Leistung für gehobene Ansprüche",
                         "preis":"599.99"},
                        {"produktID":2,
                         "dateiname":"p2.jpg",
                         "titel":"Streaming",
                         "beschreibung":"Die neue Version des Amazon Firestick mit höherer Auflösung",
                         "preis":"59.10"},
                        {"produktID":3,
                         "dateiname":"p3.jpg",
                         "titel":"Notebook",
                         "beschreibung":"Asus Zenbook businesstauglich",
                         "preis":"1649.99"},
                        {"produktID":6,
                         "dateiname":"p4.jpg",
                         "titel":"Beamer",
                         "beschreibung":"Der optimale Beamer für den Heimgebrauch, leistungsstark und leistbar",
                         "preis":"367.22"},
                        {"produktID":7,
                         "dateiname":"p5.jpg",
                         "titel":"AV-Receiver",
                         "beschreibung":"Denon RX-799 mit 4 HDMI-Anschlüssen ",
                         "preis":"499.90"},
                        {"produktID":8,
                         "dateiname":"p6.jpg",
                         "titel":"Heimkino",
                         "beschreibung":"Das Samsung S339 besticht durch seine hervorragende Audio-Qualität",
                         "preis":"589.90"},
                        {"produktID":9,
                         "dateiname":"p7.jpg",
                         "titel":"Kameras",
                         "beschreibung":"Spiegelreflexkamera von Canon mit 50mm Objektiv im Set",
                         "preis":"587.21"},
                        {"produktID":10,
                         "dateiname":"p8.jpg",
                         "titel":"Fernseher",
                         "beschreibung":"OLED-TV von Samsung in UHD-Auflösung",
                         "preis":"999.99"},
                        {"produktID":11,
                         "dateiname":"p9.jpg",
                         "titel":"Lautsprecher",
                         "beschreibung":"Bluetooth-Lautsprecher, stereo, mit Akku",
                         "preis":"129.65"}
                    ]
                    ';

  

    public function __construct() {
        $this->doConnect();
    }

    public function doConnect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
    }

    /* Auslesen aller Produkte aus der Datenbank und Rückgabe aller Daten in Form eines Arrays */
    public function getAllProducts() {
        $productsAll = array();
      
        // Verwendung von Dummy-Daten
        $select_all_products_sql = "SELECT * from produkte";

        $products_results        = $this->conn->query($select_all_products_sql);

        if ($products_results->num_rows > 0) {
            while($row = $products_results->fetch_assoc()) {
                $productsAll[] = $row;
            }
        }else{
            $productsAll = array();
        }

        /* TODO
            statt der Verwendung der Dummy-Daten sollen die Daten aus der DB eingelesen werden
            und in geeigneter Form als $productsAll zurück übergeben werden
        */

        return $productsAll;
    }

    

    /* Übergabe von Username und Passwort und Login über die Datenbank */
    public function checkLogin($username, $password) {


        // dummy-login
        #$password       = password_hash($password, PASSWORD_DEFAULT);
        $check_user_sql = "select * from users where username = '".$username."'";
        
        $check_user_res = $this->conn->query($check_user_sql);

        if ($check_user_res->num_rows > 0) {

            $user_data = $check_user_res->fetch_assoc();

            if (password_verify($password, $user_data['password'])) {
                
                $_SESSION['user_loggedin']  = 1;
                $_SESSION['username']       = $username;

                if($user_data['isadmin']) {
                    $_SESSION['is_admin']       = 1;
                }else{
                    $_SESSION['is_admin']       = 0;
                }
                return true;
            }
            return false;
        }
        return false;

        /*
        if ($username=="user" && $password=="user") {
            return true;
        }
        if ($username=="admin" && $password=="admin") {
            return true;
        }
        return false;
        */

        /* TODO
            statt des Dummy-Logins sollen die Login-Daten an der DB überprüft werden
            das Passwort ist mit password_hash verschlüsselt
            für die beiden Einträge in der DB gilt:
                username: user
                password: user
                username: admin
                password: admin
            Lesen Sie weiters aus der DB aus, ob es sich um einen User mit Admin-Rechten handelt
        */
    }


}

?>