<?php
include "config.php";

if(isset($_POST['ship_id'])){

    $ship_id = $_POST['ship_id'];

    $sql_statement = "DELETE FROM shipping WHERE ship_id = $ship_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>