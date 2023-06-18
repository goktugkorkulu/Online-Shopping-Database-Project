<?php

$db = mysqli_connect('localhost', 'root', '', 'project_db');
if ($db->connect_errno > 0){
    die('Unable to connect to the database[' . $db->connect_error . ']');
}

?>