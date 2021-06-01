<?php

// Content of database.php

$mysqliConn = mysqli_connect('sql311.byethost3.com','b3_27662528','passcpanel17','b3_27662528_db3');

if (!$mysqliConn){
    die("Could not connect to database: ".mysqli_connect_error());
}


?>
