<?php

include "config.php";

if(isset($_POST['payment_amount'])){

    $payment_amount = $_POST['payment_amount'];
    $payment_date = $_POST['payment_date'];

    echo $payment_amount . " " . $payment_date;

    $sql_statement = "INSERT INTO payment(payment_amount, payment_date)
                        VALUES ('$payment_amount', '$payment_date')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>