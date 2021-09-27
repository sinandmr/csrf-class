<?php require_once 'csrf.php' ?>

<form action="submit.php" method="post">
    <?php CSRF::token() ?>
    <input type="text" name="isim" placeholder="İsim">
    <input type="submit" name="gonder" value="Gönder">
</form>