<?php
class Fortune {
    // Properties
    public string $relationships;
    public string $money;
    public string $fame;
    public int $luckyNumber;

    // Methods
    function getRelationships() {
        return $this->relationships;
    }
    function getMoney() {
        return $this->money;
    }
    function getFame() {
        return $this->fame;
    }
    function getLuckyNumber() {
        return $this->luckyNumber;
    }

    // Constructor
    public function __construct($relationships, $money, $fame, $luckyNumber) {
        $this->relationships = $relationships;
        $this->money = $money;
        $this->fame = $fame;
        $this->luckyNumber = $luckyNumber;
    }
}