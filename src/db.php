<?php
    require 'rb.php';
    R::setup('mysql:host=localhost;dbname=message', 'root', '');
    $con = mysql_connect('localhost', 'root','','message');
?>