<?php
/**
 * Created by IntelliJ IDEA.
 * User: BramLap
 * Date: 13/01/2017
 * Time: 14:17
 */

namespace bontemps;


class Database_connect
{
    protected $conn;
    protected function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "WachtwoordphpMyAdmin";
        $dbname = "bontemps_database";

        // Create connection
        $this->conn = new \mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

}