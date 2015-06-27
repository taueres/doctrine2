<?php
$pdo = new PDO('mysql:host=db', 'root', 'root');
$pdo->exec('CREATE DATABASE example CHARACTER SET utf8 COLLATE utf8_general_ci;');

echo "Database created\n";
