<?php
$dbsetup = 'mysql:host=MySQL-8.0;dbname=test;charset-utf8';
$dbUser='root';
$dbPas='';
$dbErrMode=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

$conn = new PDO($dbsetup,$dbUser,$dbPas,$dbErrMode);




?>