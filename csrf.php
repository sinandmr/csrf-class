<?php
session_start();

class CSRF {

    # Bu method ile her form isteğinde benzersiz token üretiliyor ve form elemanlarına hidden olarak ekleniyor.
    # Kullanıcıya gözükmüyor ama formun içinde gizli bir şekilde duruyor.
    public static function token(){
        $token = md5(uniqid());
        $_SESSION['token']  = $token;
        echo '<input type="hidden" name="csrf_token" value="'.$token.'">';
    }

    # Bu method ile de yukarıdaki tokeni kontrol ediyoruz.
    # Eğer yukarıdaki token oluşturulduysa ve formdan gelen token ile aynıysa true döner. Böylece form işlemi gerçekleşir.
    public static function control($token){
        return isset($_SESSION['token']) && $_SESSION['token'] == $token;
    }

}