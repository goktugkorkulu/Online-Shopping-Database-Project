<?php

include "config.php";

if(isset($_POST['ship_company'])){

    $ship_company = $_POST['ship_company'];
    $ship_cost = $_POST['ship_cost'];

    echo $ship_company . " " . $ship_cost;

    $sql_statement = "INSERT INTO shipping(ship_company, ship_cost)
                        VALUES ('$ship_company', '$ship_cost')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>