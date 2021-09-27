<?php
require_once 'csrf.php';

if(CSRF::control(@$_POST['csrf_token'])){
    echo 'Doğru token ile gönderilen form. Güvenli.';
} else {
    echo 'Yanlış token ile gönderilen form. Güvenli değil.';
}