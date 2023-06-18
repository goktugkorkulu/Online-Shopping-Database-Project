<?php
include "config.php";

if(isset($_POST['payment_id'])){

    $payment_id = $_POST['payment_id'];

    $sql_statement = "DELETE FROM cash_on_delivery WHERE payment_id = $payment_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>