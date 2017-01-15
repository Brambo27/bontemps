<?php
/**
 * Created by IntelliJ IDEA.
 * User: BramLap
 * Date: 13/01/2017
 * Time: 11:17
 */

namespace bontemps;


class Gerecht
{
    private $gerechtNr;
    private $naam;
    private $soort;
    private $omschrijving;
    private $prijs;
    private $beschikbaarheid;

    function __construct()
    {
        $this->initialiseer();
    }
    private function initialiseer(){
        $this->gerechtNr = 0;
        $this->naam = "";
    }
}
