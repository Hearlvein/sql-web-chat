<?php

include 'connect_db.php';

echo '<ul>';
foreach($dbh->query('SELECT * FROM messages') as $row) {
	#print_r($row);
    echo '<li><em>' . $row['dt'] . ': </em><strong>' . $row['pseudo'] . '</strong>: ' . $row['message'] . '</li>';
}
echo '</ul>';