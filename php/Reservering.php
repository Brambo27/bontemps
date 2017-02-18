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
    private $datum;
    private $aantalPersonen;
    private $lastKlantId;
    private $beginTijd;

    function __construct($aantalPersonen, $datum, $lastKlantId, $beginTijd)
    {
        $this->initialiseer();
        $this->datum = $datum;
        $this->datum = date("Y-m-d", strtotime($this->datum));
        $this->aantalPersonen = $aantalPersonen;
        $this->lastKlantId = $lastKlantId;
        $this->beginTijd = $beginTijd;
    }
    private function initialiseer(){
    }

    public function opslaan_database(){
        $this->connect();

        $sql = "INSERT INTO reservering (datum, aantalPersonen, klantNr, beginTijd) VALUES ('".$this->datum."', '".$this->aantalPersonen."', '".$this->lastKlantId."', '". $this->beginTijd ."')";
        var_dump($sql);
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();
    }
}