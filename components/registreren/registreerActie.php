<?php
require_once'C:/xampp/htdocs/dashboard/bontemps/php/klant.php';
require_once 'C:/xampp/htdocs/dashboard/bontemps/php/Database_connect.php';
$classKlant = new \bontemps\Klant($_POST["naam"], $_POST["email"], $_POST["telefoon"], $_POST["wachtwoord"]);
$classKlant->opslaan_database();
//header("location: ../../registreren.php");
