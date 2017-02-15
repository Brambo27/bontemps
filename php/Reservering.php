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
    private $lastKlantId;

    function __construct($aantalPersonen, $datum, $lastKlantId)
    {
        $this->initialiseer();
        $this->datum = $datum;
        $this->datum = date("Y-d-m", strtotime($this->datum));
        $this->aantalPersonen = $aantalPersonen;
        $this->lastKlantId = $lastKlantId;
    }
    private function initialiseer(){
        $this->reserveringNr = 0;
    }

    public function opslaan_database(){
        $this->connect();

        $sql = "INSERT INTO reservering (datum, aantalPersonen, klantNr) VALUES ('".$this->datum."', '".$this->aantalPersonen."', '".$this->lastKlantId."')";
        var_dump($sql);
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();
    }
}