<?php

include 'connect_db.php';

$response = $dbh->query('SELECT COUNT(*) FROM messages');
echo $response->fetch()[0];