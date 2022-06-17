<?php
/* Sürücü isteğiyle bir MySQL veritabanına bağlanalım */
$dsn = 'mysql:dbname=sinema;host=127.0.0.1';
$user = 'root';
$password = '';

$baglan = new PDO($dsn, $user, $password);

?>