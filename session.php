<?php
class SessionCounter {
    private $sessionKey = 'nbr_session';

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION[$this->sessionKey])) {
            $this->set(1);
        } else {
            $_SESSION[$this->sessionKey]++;
        }
    }
    public function set($value) {
        $_SESSION[$this->sessionKey] = $value;
    }

    public function get() {
        return $_SESSION[$this->sessionKey] ?? 0;
    }
    public function salutation() {
        if ($this->get() == 1) {
            return 'Bienvenue à notre plateforme.';
        } else {
            return "Merci pour votre fidélité, c’est votre « " . $this->get() . " » éme visite.";
        }
    }
}
?>
