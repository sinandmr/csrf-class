<?php
session_start();

class CSRF {

    public static function token(){
        $token = md5(uniqid());
        $_SESSION['token']  = $token;
        echo '<input type="hidden" name="csrf_token" value="'.$token.'">';
    }

    public static function control($token){
        return isset($_SESSION['token']) && $_SESSION['token'] == $token;
    }

}