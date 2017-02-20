<?php
/**
 * Created by IntelliJ IDEA.
 * User: BramDesk
 * Date: 09/02/2017
 * Time: 20:16
 */

namespace bontemps;
require_once 'Database_connect.php';
session_start();


class Login extends Database_connect
{
    private $naam;
    private $email;
    private $wachtwoord;

    function __construct($email, $wachtwoord){
        $this->initaliseer();
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
    }
    private function initaliseer(){
        $this->naam = "";
    }

    private function check_datebase(){
        $this->connect();

        $sql = "SELECT email FROM klant WHERE email = '$this->email' AND wachtwoord = '$this->wachtwoord' ";

        if ($this->conn->query($sql)->num_rows < 1) {
            $_SESSION["loggedIn"] = false;
            ob_start(); // ensures anything dumped out will be caught

            $url = 'inloggen.php';

            while (ob_get_status())
            {
                ob_end_clean();
            }

            header( "Location: $url" );
        }
        else {
            $_SESSION["EmailPassCorrect"] = true;
            $sql = "SELECT naam FROM klant WHERE email = '$this->email'";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                $_SESSION["loggedIn"] = true;
                while($row = $result->fetch_assoc()) {
                    $this->naam = $row["naam"];
                }
            } else {
                echo "0 results";
            }

            ob_start(); // ensures anything dumped out will be caught

            $url = 'inloggen.php';

// clear out the output buffer
            while (ob_get_status())
            {
                ob_end_clean();
            }

// no redirect
            header( "Location: $url" );
        }

        $this->conn->close();
    }
}
