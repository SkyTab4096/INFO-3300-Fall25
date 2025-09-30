<?php
class Memory {
    // Properties
    public string $question1;
    public string $question2;
    public string $outcome;

    // Methods
    function getQuestion1() {
        return $this->question1;
    }
    function getQuestion2() {
        return $this->question2;
    }
    function getOutcome() {
        return $this->outcome;
    }

    // Constructor
    public function __construct($question1, $question2, $outcome) {
        $this->question1 = $question1;
        $this->question2 = $question2;
        $this->outcome = $outcome;
    }
}