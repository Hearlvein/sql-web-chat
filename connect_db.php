<?php

try {
    $dbh = new PDO('mysql:host=localhost;port=3308;dbname=chat', 'root', '');
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}