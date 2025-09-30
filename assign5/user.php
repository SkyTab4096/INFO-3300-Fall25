<?php
class User {
    // Properties
    public string $username;
    public bool $waiverSigned;

    // Methods
    function getUsername() {
        return $this->username;
    }
    function getWaiverSigned() {
        return $this->waiverSigned;
    }
    function setWaiverSigned($waiverSigned) {
        $this->waiverSigned = $waiverSigned;
    }

    // Constructor
    public function __construct($username, $waiverSigned) {
        $this->username = $username;
        $this->waiverSigned = $waiverSigned;
    }
}
