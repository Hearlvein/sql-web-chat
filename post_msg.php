<?php

include 'connect_db.php';

$dt = date('Y-m-d h:i:s');
$pseudo = htmlspecialchars($_POST['pseudo']);
$msg = htmlspecialchars($_POST['msg']);

$req = $dbh->prepare('INSERT INTO messages (dt, pseudo, message) VALUES (:dt, :pseudo, :msg)');
$req->execute(array(
	'dt' => $dt,
	'pseudo' => $pseudo,
	'msg' => $msg
));

echo '<a href="index.php">return to chat</a>';