<?php namespace Server\Security;

class GenerateCsrfToken {
    protected $token;

    public function setToken() {
        $token = md5(uniqid(rand(), TRUE));
        session_start();
        $_SESSION['token'] = true;
        $_SESSION['token'] = $token;
        $this->token = $token;
        return $this->token;
    }
    
    public function getToken() {
        session_start();
        return $_SESSION['token'];
    }
};