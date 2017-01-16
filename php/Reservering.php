<?php
/**
 * Created by IntelliJ IDEA.
 * User: BramLap
 * Date: 13/01/2017
 * Time: 11:15
 */

namespace bontemps;
require_once 'Database_connect.php';

class Reservering extends Database_connect
{
    private $reserveringNr;
    private $datum;
    private $aantalPersonen;

    function __construct($datum, $aantalPersonen)
    {
        $this->initialiseer();
        $this->datum = $datum;
        $this->aantalPersonen = $aantalPersonen;
    }
    private function initialiseer(){
        $this->reserveringNr = 0;
    }

    public function opslaan_database(){
        $this->connect();

        $sql = "INSERT INTO reservering (aantalPersonen, datum, klantNr) VALUES ('".$this->datum."', '".$this->aantalPersonen."', '".mysqli_insert_id($this->conn)."')";
        echo ("<br>");
        var_dump(mysqli_insert_id($this->conn));
        echo ("<br>");
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();
    }
}