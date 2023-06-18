<?php

include "config.php";

if(isset($_POST['c_id'])){

    $c_id = $_POST['c_id'];
    $ship_id = $_POST['ship_id'];
    $delivery_date = $_POST['delivery_date'];

    echo $c_id . " " . $ship_id ." ". $delivery_date;

    $sql_statement = "INSERT INTO goes_to(c_id, ship_id, delivery_date)
                        VALUES ('$c_id', '$ship_id', '$delivery_date')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>