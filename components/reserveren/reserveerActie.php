<?php
require_once 'C:/xampp/htdocs/dashboard/WebDesign/bontemps/php/Reservering.php';
require_once'C:/xampp/htdocs/dashboard/WebDesign/bontemps/php/klant.php';
require_once 'C:/xampp/htdocs/dashboard/WebDesign/bontemps/php/Database_connect.php';

$classKlant = new \bontemps\Klant($_POST["naam"], $_POST["email"], $_POST["telefoon"], $_POST["wachtwoord"]);
$classKlant->opslaan_database();

$classReservering = new \bontemps\Reservering($_POST['aantalPersonen'], date('Ymd'), $classKlant->lastKlantId);
$classReservering->opslaan_database();

//header("location: ../../reserveren.php");