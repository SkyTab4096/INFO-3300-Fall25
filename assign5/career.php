<?php
class Career {
    // Properties
    public int $dentistScore;
    public int $doctorScore;
    public int $pharmacistScore;
    public string $career;

    // Methods
    function getDentistScore() {
        return $this->dentistScore;
    }
    function getDoctorScore() {
        return $this->doctorScore;
    }
    function getPharamacistSCore() {
        return $this->pharmacistScore;
    }
    function getCareer() {
        return $this->career;
    }

    // Constructor
    public function __construct($dentistScore, $doctorScore, $pharmacistScore, $career) {
        $this->dentistScore = $dentistScore;
        $this->doctorScore = $doctorScore;
        $this->pharmacistScore = $pharmacistScore;
        $this->career = $career;
    }
}