<?php
/**
 * Created by IntelliJ IDEA.
 * User: BramLap
 * Date: 13/01/2017
 * Time: 11:08
 */

namespace bontemps;
require_once 'Database_connect.php';

class Klant extends Database_connect
{
    private $klantNr;
    private $naam;
    private $telefoon;
    private $email;
    private $wachtwoord;
    public $lastKlantId;

    function __construct($naam, $email, $telefoon, $wachtwoord)
    {
        $this->initaliseer();
        $this->naam = $naam;
        $this->email = $email;
        $this->telefoon = $telefoon;
        $this->wachtwoord = $wachtwoord;
    }
    private function initaliseer(){
        $this->klantNr = 0;
    }
    public function opslaan_database(){
    $this->connect();

        $sql = "INSERT INTO klant (naam, email, telefoon, wachtwoord) VALUES ('".$this->naam."', '".$this->email."', '".$this->telefoon."', '".$this->wachtwoord."')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
            echo ("<br> Klant with id number");
            var_dump(mysqli_insert_id($this->conn));
            echo ("<br>");
            $this->lastKlantId = mysqli_insert_id($this->conn);
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            echo ("<br>");
        }

        $this->conn->close();
    }
}