<?php
require_once 'C:/xampp/htdocs/dashboard/WebDesign/bontemps/php/Reservering.php';
require_once'C:/xampp/htdocs/dashboard/WebDesign/bontemps/php/klant.php';
require_once 'C:/xampp/htdocs/dashboard/WebDesign/bontemps/php/Database_connect.php';

$classReservatie = new \bontemps\Reservering($_POST['aantal_personen'], $_POST['datum']);
$classReservatie->opslaan_database();

$classKlant = new \bontemps\Klant($_POST["naam"], $_POST["email"], $_POST["telefoon"], $_POST["wachtwoord"]);
$classKlant->opslaan_database();

header("location: ../../reserveren.php");